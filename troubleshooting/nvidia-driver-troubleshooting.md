# Nvidia Driver Troubleshooting

> How to configure Nvidia driver on Linux.

Original solution on [nvidia developers forum](https://forums.developer.nvidia.com/t/nvidia-xconfig-doesnt-do-what-i-want-it-to-nor-does-nvidia-settings/107883/6) page.\
If Ubuntu has problem booting when on battery power, check [askubnutu.com](https://askubuntu.com/questions/1061270/ubuntu-18-04-wont-boot-on-battery-power) solution.

[↩ back to list of cheatsheets](README.md#list-of-cheatsheets)

## Solution

Check if `render offload` feature needs a patched Xserver. If Ubuntu is providing this, it could be enabled by following commands:

```bash
# Create and modify xorg.conf
cd /etc/X11/
touch xorg.conf
sudo gedit xorg.conf
```

```
Section "ServerLayout"
  Identifier "layout"
  Option "AllowNVIDIAGPUScreens"
EndSection
```

* Afterwards, function can be checked running `__NV_PRIME_RENDER_OFFLOAD=1 __GLX_VENDOR_LIBRARY_NAME=nvidia glxinfo | grep vendor`. This should return something `Nvidia`.
* Then applications can be started on the nvidia gpu running `__NV_PRIME_RENDER_OFFLOAD=1 __GLX_VENDOR_LIBRARY_NAME=nvidia`.
* Downside of this is that no external monitors connected to the nvidia gpu will work.

If this won't help, proceed with following steps:

### Step 1

```bash
# Remove xorg.conf
sudo rm -rf /etc/X11/xorg.conf

# Modify 10-amdgpu.conf
sudo gedit /usr/share/X11/xorg.conf.d/10-amdgpu.conf
```
* Replace `Driver "amdgpu"` with `Driver "modesetting"`

### Step 2

```bash
# Modify 10-nvidia.conf
sudo gedit /usr/share/X11/xorg.conf.d/10-nvidia.conf
```

* Add `Option "PrimaryGPU" "YES"` inside the `OutputClass`.

### Step 3

* Create two `optimus.desktop` files and modify with content from bellow.

```bash
# Create and modify optimus.desktop file
cd /etc/xdg/autostart/
touch optimus.desktop
sudo gedit optimus.desktop

# Create and modify optimus.desktop file
cd /usr/share/gdm/greeter/autostart/
touch optimus.desktop
sudo gedit optimus.desktop
```
* Add following content to both files
```
[Desktop Entry]
Type=Application
Name=Optimus
Exec=sh -c "xrandr --setprovideroutputsource modesetting NVIDIA-0; xrandr --auto"
NoDisplay=true
X-GNOME-Autostart-Phase=DisplayServer
```

This should enable the nvidia profile on Ubuntu.
