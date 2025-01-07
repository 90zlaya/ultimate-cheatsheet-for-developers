# No HDMI Output Fix

> How to fix no HDMI output on Ubuntu 18.04.

Original solution is on [nvidia developers forum](https://forums.developer.nvidia.com/t/hdmi-output-doesnt-work-in-ubuntu-18-04/83896/4) page. 

[↩ back to list of cheatsheets](README.md#list-of-cheatsheets)

## Solution

### Step 1

* Make sure the package `nvidia-prime` is installed by running `sudo apt install nvidia-prime`. 

```bash
# Delete xorg.conf
sudo rm -rf /etc/X11/xorg.conf

# Switch to nvidia
sudo prime-select nvidia
```

### Step 2

```bash
# Modify 10-amdgpu.conf
sudo gedit /usr/share/X11/xorg.conf.d/10-amdgpu.conf
```

* Modify file by replacing `Driver "amdgpu"` with `Driver "modesetting"`. 

### Step 3

```bash
# Modify 10-nvidia.conf
sudo gedit /usr/share/X11/xorg.conf.d/10-nvidia.conf
```

* Add following line `Option "PrimaryGPU" "Yes"` inside `OutputClass`. 