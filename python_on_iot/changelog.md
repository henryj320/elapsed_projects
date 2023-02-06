# python_on_iot
Last update: 2022/10/09 23:36
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
