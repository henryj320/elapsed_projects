# python_on_iot
Last update: 2023/02/06 22:36
<br><br>

## Changelog for python_on_iot

1. Created the original project directory.
2. Created a file for research notes - [Research Notes](research.md)
3. Looked into the specs of the RPi and Arduino.
4. Looked at what OS to use.
5. Looked into the power usage of RPi.
6. Installed Armbian onto the Raspberry Pi.
7. Figured out SSHing into the RPi.
8. Set a static IP for the RPi
9. Figured out cloning a repository from Git.
10. Learnt how to set up a new virtual environment
    - "apt install python3.10-venv" - This is required to make a VE.
    - "python3 -m venv main_python_venv" - Makes a VE with that name.
    - ". main_python_venv/bin/activate"
11. Figured out running the flask. Whilst inside the VE, just:
    - "flask run --host=0.0.0.0"
---
12. Coming back to it in February 2023 now that python_projects is split into several repos. Removing old files
    - ` rm -rf python_projects `
    - ` rm -rf Git_Repos `
13. Creating a new user on the RPi specifically for running the Flask website.
    - ` sudo useradd -m webadmin -s /bin/bash`
        - ` -s ` will create a home directory "/home/webadmin"
    - ` sudo passwd webadmin `
        - Set to the same as previous one
14. Logging in to the new user
    - ` exit `
    - Logging in
    - ` pwd ` to make sure that the "/home/webadmin" directory is made.
15. Cloning the Git Repos
    - ` mkdir Git_Repos `
    - ` git clone git@github.com:henryj320/flask_website.git `
    - Permission denied (publickey). Need to set up a new public key
    - ` ssh-keygen -t ed25519 -C "henryj320@gmail.com" `
        - Generated in "/home/webadmin/.ssh/id_ed25519
    - Followed the steps and added it to GitHub SSH keys
    - Cloned muscle_checker and autogenerate_gym_calendar too
16. Copying app.py
    - ` cd flask_website `
    - ` cp app.py .. `
17. Trying to run it
    - ` flask run --host=0.0.0.0 `
    - Everything seems to be working as planned.
