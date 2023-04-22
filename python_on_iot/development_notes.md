# python_on_iot
Last update: 2023-04-22 19:22
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

### Switching to DietPi

18. Installing DietPi on the MicroSD Card
    - Doownloaded from the website
    - Extracted the file
    - balenaEtcher (Windows)
        - Selected the .iso and Target drive
            - Flashing...
    - One issue. The HDMI cable seems to have broken
        - Took it apart and blew on it. Seems to be working for now
    - Setting up the RPi
        - Setting up WiFi
        - ` reboot `
        - Setting up the keyboard
        - Setting the password
        - Setting a static IP
            - DietPi-Config
            - Network Options: Adapters
            - WiFi
            - Change Mode
                - DHCP to Static
            - Setting it to 192.168.1.109
            - Apply
        - ` reboot `
        - Installing software
            - XFCE
            - Docker and DOcker Compose
            - DietPi-Dashboard
            - OpenSSH Client
            - Taking a long time.
    - Booting into the Desktop
        - ` reboot `
        - ` startx `
    - Trying the dashboard
        - http://192.168.1.109:5252/ on the Browser
        - Shows system usage
        - Allows management
        - Allows a terminal
    - Testing SSH
        - ` apt install net-tools `
        - ` ifconfig `
            - 192.168.1.109 (Same as before)
        - ` ssh root@192.168.1.109 `
            - "Host key for 192.168.1.109 has changed and you have requested strict checking."
            - ` ssh-keygen -R 192.168.1.109 `
        - Yep, that works
            - But could just use the DietPi Dashboard
    - Setting up a "dashboard-user" user.
        - Connecting to http://192.168.1.109:5252/
        - Terminal
        - Creating a new user on the RPi specifically for running the Flask website.
            - ` sudo useradd -m dashboard-user -s /bin/bash`
            - ` -s ` will create a home directory "/home/dashboard-user"
            - ` sudo passwd dashboard-user `
                - Set to the same as previous one
    - Setting up Git
        - Connected to http://192.168.1.109:5252/
        - Software section
            - Ticked Git
            - Install
        - Terminal
            - ` su dashboard-user `
            - ` ssh-keygen -t ed25519 -C "henryj320@gmail.com" `
            - ` cat /home/dashboard-user/.ssh/id_ed25519.pub `
            - Pasting the key into GitHub.
        - Seems to have crashed. Hard rebooting
        - Terminal
            - ` su dashboard-user `
            - ` cd /home/dashboard-user `
            - ` git clone git@github.com:henryj320/react_dashboard.git `
    - Running the React dashboard
        - ` cd react_dashboard `
        - ` vi docker-compose.yml `
            - Not found
            - Installing vi/vim
                - ` sudo apt update `
                    - "dashboard-user is not in list of sudoers"
                        - ` su root `
                        - ` adduser dashboard-user sudo `
                            - That worked
                        - ` su dashboard-user `
                - ` cd /home/dashboard-user/react_dashboard `
                - ` sudo apt update `
                - ` sudo apt upgrade `
                - ` sudo apt install vim `
        - ` vi docker-compose.yml `
        - ` vi react_dashboard_app/src/components/Rpi_health/Rpi_health.js `
        - ` vi react_dashboard_app/src/pages/Muscle_checker.js `
        - ` sudo docker system prune --all --force `
        - ` sudo docker compose up -d `
            - Seems to be taking forever. I'll build each individually. Looks like it crashed
        - Rebooting
        - ` sudo docker build -f api.Dockerfile --tag react-dashboard-api-image . `
            - Same error
                - "error: command 'gcc' failed. No such file or directory"
                    - Maybe gcc doesnt work on RPis?
19. Trying out Uptime Kuma (monitoring software)
    - On Laptop
        - ` docker run -d --restart=always -p 5001:3001 -v uptime-kuma:/app/data --name uptime-kuma louislam/uptime-kuma:1 `
            - Connecting (main user is "henry")
        - Loading the URL at http://192.168.1.101:5001/dashboard
        - Trying adding monitors
        - Trying setting up a notification 
            - Settings -> Notifications
            - Setup notification
                - Email
                    - Need to enable SMTP on my Gmail
                        - Manage Google Account -> Security
                        - App passwords (https://myaccount.google.com/apppasswords)
                            - App: Other
                            - Name: Uptime Kuma Email
                            - Generate
                                - fhhk mjmg sdiw iswy
                    - Hostname: smpt.gmail.com
                    - Port: 587
                    - Security: None / STARTTLS
                    - Username: henryj320@gmail.com
                    - Password: My Gmail Password
                    - From Email: testing@uptimekuma.com
                    - To Email: henryj320@gmail.com
                    - Test
                        - That worked!
                - Taking down the dashboard to see if it works
                    - ` sudo docker stop react-dashboard-website `
                    - Dashboard recognised it
                    - It emailed!
                    - ` sudo docker start react-dashboard-website `
        - Trying monitoring containers
            - Have to restart Uptime Kuma
                - ` sudo docker stop uptime-kuma `
                - ` sudo docker remove uptime-kuma `
                - ` sudo docker run -d --restart=always -p 5001:3001 -v uptime-kuma:/app/data -v /var/run/docker.sock:/var/run/docker.sock --name uptime-kuma louislam/uptime-kuma:1 `
                    - Basically added to share docker.sock with Kuma
            - "Add new monitor"
                - Monitor Type: Docker Container
                - Setup Docker Host
                    - Defaults
                    - Test
            - That works really well!
        - Trying out a status page
            - Can add any monitors
            - So could have which devices are online, which devices arent, etc
            - Marks a "+1" in the favicon if something goes down
        - Trying to check if devices are alive
            - Monitor Type: Ping
            - Issue is it does a popup if not alive
                - Also states a degraded service in the Status Page
        - Trying tagging
            - Settings -> Tags -> "Add new tag"
                - Name: Devices Online
                - Added each of the Alive ones
        - How would I split it?
            - Containers
            - Websites
