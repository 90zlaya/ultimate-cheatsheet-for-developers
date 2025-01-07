# Installing Postman

> How to install Postman.

[↩ back to list of cheatsheets](README.md#list-of-cheatsheets)

## Solution

### Using Snap

You might use snap `sudo snap install postman` and skip all other steps.

### Classic Installation

Download latest Postman app from [official download link](https://dl.pstmn.io/download/latest/linux).


```sh
tar -xzf Postman-linux-x64-5.3.2.tar.gz
```

If any version is installed before, remove it.

```sh
sudo rm -rf /opt/Postman
```

Move Postman

```sh
sudo mv Postman /opt/Postman
```

Create a symbolic link

```sh
sudo ln -s /opt/Postman/Postman /usr/bin/postman
```

Create a desktop file

```
cat > ~/.local/share/applications/postman.desktop <<EOL
[Desktop Entry]
Encoding=UTF-8
Name=Postman
Exec=postman
# Before v6.1.2
# Icon=/opt/Postman/resources/app/assets/icon.png
Icon=/opt/Postman/app/resources/app/assets/icon.png
Terminal=false
Type=Application
Categories=Development;
EOL
```

Remove the tar:

```sh
rm Postman-linux-x64-5.3.2.tar.gz
```
