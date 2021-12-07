# Git
> Version-control system for tracking changes in source code during software development

Read more about [Git](https://git-scm.com/).

## Table of Contents

* [Misc](#misc)
* [Stash](#stash)
* [Commits](#commits)
* [Tags](#tags)
* [Branches](#branches)
* [Users](#users)
* [Remote](#remote)
* [Alias](#alias)
    * [Example Alias Commands](#example-alias-commands)
    * [Setting Alias](#setting-alias)

[↩ back to list of cheatsheets](README.md#list-of-cheatsheets)

## Misc

```bash
# Access configuration
nano ~/.gitconfig 

# Get version
git version

# Initialize repository
git init

# Set credentials for repository
git config credential.helper store

# Clone to repository
git clone [repository-url]

# Get differences between files
git diff --staged

# Reset changes to the file
git checkout HEAD -- [filename]

# Restore changes to directory
git restore -s@ -SW  -- [directory]

# Count unpacked number of objects and their disk consumption
git count-objects -v
```

[⬆ back to top](#table-of-contents)

## Stash

```bash
# List all stashed changes
git stash list

# Save working changes to stash
git stash save

# Apply previously stashed working changes
git stash apply

# Clear all stashed working changes
git stash clear
```

[⬆ back to top](#table-of-contents)

## Commits

```bash
# Check commits short log
git shortlog

# Get last n commits
git log -n [number-of-commits]

# Get last n commits in one line
git log -n [number-of-commits] --oneline

# Get last n commits by author
git log -n [number-of-commits] --author=[author-name]

# Commit order
git add *
git commit -m "[message-content]"
git pull
git push

# Remove files from stage area
git rm --cached [filename]

# Add local repository to the server for the first time
git remote add origin [remote-location]
git push -u origin master

# Reset changes to the last commit
git reset --hard

# Reset changes to the specific commit
git reset --hard [commit-hash]

# Delete last n commits and force push to remote origin
git reset --hard HEAD~[n] && git push -f

# Undo specific commit
git checkout [commit-hash]

# Rename last commit message
git commit --amend -m "[message-content]" && git push --force [branch-name]

# Set commit date few days in past
git commit -m "[message-content]" --date="[number-of-days] day ago"
```

[⬆ back to top](#table-of-contents)

## Tags

```bash
# Delete a local tag
git tag -d [tag-name]

# Remove tags remotely
git push origin :refs/tags/[tag-name]

# Tags to branches
git checkout tags/[tag-name] -b [branch-name]

# Tag older commit
git tag -a [version-number] [commit-number] -m "[tag-message]" && git push origin [version-number]
```

[⬆ back to top](#table-of-contents)

## Branches

```bash
# Show current branch
git branch

# List all branches
git branch -a

# List all remote branches
git branch -r

# Switch to branch
git checkout [branch-name]

# Create branch
git branch [branch-name]

# Clone branch
git clone --branch [branch-name]

# Rename branch (locally)
git branch -m [old-name] [new-name]

# Delete branch (locally)
git branch -d [branch-name]

# Delete branch (remotely)
git push origin -d [branch-name]

# Set specific branch to be master for pushed commits
git push --set-upstream origin [branch-name]

# Merge branch to master
git merge [branch-name]

# Get all merged branches
git branch --merged

# Get all non-merged branches
git branch --no-merged

# Create empty branch
git checkout --orphan empty-branch && git rm -rf . && git commit --allow-empty -m "Initial commit" && git push -u origin empty-branch

# List all branches in local which are gone on remote
git branch -vv | awk '/: gone]/{print $1}'

# Delete all branches locally which are gone on remote
git branch -vv | awk '/: gone]/{print $1}' | xargs git branch -d
```

[⬆ back to top](#table-of-contents)

## Users

```bash
# Get global user
git config --global --list

# Set global user
git config --global user.name  "[username]"
git config --global user.email "[email]"
```

[⬆ back to top](#table-of-contents)

## Remote

```bash
# Get remote version
git remote -v

# Set remote origin URL
git remote set-url [url-path]

# Change directory and remote path
git remote set-url --add origin [url-path]

# Edit remote location
git remote -v
git remote rm origin
git remote add origin [url-path]
git push --set-upstream [url-path]

# Prune all unreachable objects from the remote object database
git remote prune origin
```

[⬆ back to top](#table-of-contents)

## Alias

```bash
# List all aliases
git config --get-regexp alias

# Set alias
git config --global alias.[alias-name] "[command]"

# Display content of specific alias
git config --global --unset alias.[alias-name]
```

### Example Alias Commands

```bash
# log-list: Log last two changes, current status and branch
!git log -n 2 && echo '' && echo '' && git status && echo '' && git branch

# prune-list: List what should be pruned locally and remotely
!git remote prune origin -n && git prune -n

# prune-now: Prune locally and remotely
!git remote prune origin && git prune

# gone-list: List branchse which can be removed locally
!git branch -vv | awk '/: gone]/{print $1}'

# gone-now: Remove branches locally
!git branch -vv | awk '/: gone]/{print $1}' | xargs git branch -D
```

### Setting Alias

Use *Set alias* line from this cheatsheet to set certain alias.\
Give name to the alias and paste command of your choice.\
Here's example how to set `prune-list` alias.

```bash
git config --global alias.prune-list "!git remote prune origin -n && git prune -n"
```

You can always set alias directly inside `.gitcofig` file.\
That file is located in the home directory.

```bash
# Open .gitconfig file in terminal
nano ~/.gitconfig
```

Change content of the file by adding `[alias]` section (only if not already present) and line of your choice (here is `prune-list` added as example).

```
[user]
    email = [your-email]
    name = [your-name]
[alias]
    prune-list = !git remote prune origin -n && git prune -n

```

[⬆ back to top](#table-of-contents)
