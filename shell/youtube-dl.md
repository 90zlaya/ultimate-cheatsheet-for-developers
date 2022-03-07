# youtube-dl
> Download videos from YouTube.

Read more about [youtube-dl](https://youtube-dl.org/).

## Table of Contents

* [Misc](#misc)
* [Install](#install)
* [Download](#download)

[↩ back to list of cheatsheets](README.md#list-of-cheatsheets)

## Misc

```bash
# Show version
youtube-dl --version
```

[⬆ back to top](#table-of-contents)

## Install

```bash
# Download using cURL (install or update) and set permissions
sudo curl -L https://yt-dl.org/downloads/latest/youtube-dl -o /usr/local/bin/youtube-dl && sudo chmod a+rx /usr/local/bin/youtube-dl
```

[⬆ back to top](#table-of-contents)

## Download

```bash
# Download playlist in mp3 format
youtube-dl -x --audio-format mp3 [playlist-url]

# Download single video in mp3 format
youtube-dl --extract-audio --audio-format mp3 [single-video-url]
```

[⬆ back to top](#table-of-contents)
