# SVN
> Version control system.

Read more about [SVN](https://subversion.apache.org/).

## Table of Contents

* [Misc](#misc)
* [Revert](#revert)
* [Log](#log)

[↩ back to list of cheatsheets](README.md#list-of-cheatsheets)

## Misc

```bash
# Status of files
svn st

# Add file
svn add [filename]

# Remove file
svn rm [filename]

# Show differences
svn diff

# Clone repository
svn checkout [server-url] [local-folder]

# Update repository
svn update

# Commit changes with message
svn commit -m "[message-content]"

# Automatically remove unversioned files
svn cleanup --remove-unversioned

# Information about repository
svn info

# Merge to local branch from server
svn merge -r 1:HEAD [server-url]
```

[⬆ back to top](#table-of-contents)

## Revert

```bash
# Revert file
svn revert [path-to-the-file]

# Revert directory
svn revert -R [path-to-the-directory]
```

[⬆ back to top](#table-of-contents)

## Log

```bash
# Show log
svn log

# Show log for last n commits
svn log -l [number-of-commits]
```

[⬆ back to top](#table-of-contents)
