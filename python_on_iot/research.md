# Research Page
Last update: 2022/10/10 22:40
<br><br>

## **Research into Running Python on an IoT Device**

### **Questions to Ask**

- What OS should be used?
- Which is more battery efficient and how much battery do each use?
- Can I use a battery?


<br><br>


### **Raspberry Pi**

#### **Core Details**

- My Raspberry Pi is a Raspberry Pi 3 Model B V1.2.
    - 1.2 GHz
    - 1GB Ram
- Inbuilt Wifi.
- Sandisk MicroSD 16GB.
- Power usage
    - MicroUSB 2.1A Power
    - Around 60 mA of current at 5.0 V
    - 1.4 Watts (0.0014) - 0.04 pence per hour
    - Laptops use 50 watts (0.05 kWh) - 1.7 pence per hour
    - In simple, the cost in power is so low that it basically does not matter.


#### **Options on an OS**

For Raspberry Pi to work, it needs an OS. Here are the viable options:
- Raspberry Pi OS
    - Based on Debian (Could just install Debian itself)
    - Stable
    - Compatibility
- Ubuntu
    - You know it
    - Install packages with the apt command
    - Less stable with a smaller community
- Armbian
    - Two images: CLI (Minimal Version) or Desktop
    - Can start minimal and then add an environment
    - Flashed to an SD card or USB stick
    - Based on Ubuntu
- Lots of other options [here](http://www.raspberrytips.com/best-os-for-raspberry-pi/).


#### **Installing Armbian onto the Raspberry Pi**

I have decided to install Armbian. It was based on Debian and Ubuntu. Setps on installing:
1. Download Armbian 22.08 Jammy (Updated 2022-08-31).
    - Downloaded the CLI version.
2. Download and install balenaEtcher 1.7.9.
3. Select to flash the Armbian.img to your Flash USB.
4. Plug it into the Raspberry Pi.
5. Launch Raspbian.
6. In CLI:
    - sudo apt-get update
    - sudo apt-get upgrade
        - Took ages.
    - echo program_usb_boot_mode=1 | sudo tee -a /boot/config.txt
        - Enables USB Boot mode by adding a config option to config.txt.
        - If you misstype, you'll need to go into Recovery mode to change the config.txt.
    - sudo reboot
    - vcgencmd bootload_version
        - Returns the version of the bootloader EEPROM image
    - sudo rpi-eeprom-update
        - Updates the bootloader
        - Error: "Command not registered
    - sudo rpi-eeprom-update
        - Error: Command not found
7. Take out the SD card and restart the RPI.
    - Took a while but now booting
    - Failed t start OpenBSD Secure Shell Server
        - Maybe because no internet?
    - Please set root password
        - WhSd12
    - Set up the Wifi
    - apt update
    - apt upgrade
8. Plug in the SD card.
9. sudo armbian-config
    - Cant make the changes that I want.
10. Reboot. Still boots by default on the SSD. Need a USB to MicroSD to change that.
    - Rebooting takes ages. Look for green flashing on the red boot LED.
    - Doesnt seem to boot off the USB, but still does on the SD.
11. Delay from getting a USB -> MicroSD adapter to install Armbian straight onto the SD
...
12. It's been 4 days since the last update. Waiting for the USB -> MicroSD Adapter.
13. balenaEtcher and Armbian 22.08 are on my Desktop. Following [this](https://raspberrytips.com/armbian-on-raspberry-pi/) guide.
14. BalenaEtcher
    - Flash from File. Flashing MXT USB Device
15. Plug the MicroSD into the Raspberry Pi and turn it on.
16. Takes a while to boot. First time booting did nothing. Unplug and replug.
17. Setting up Armbian
    - rpi4b login: root
    - Password: 1234
    - Create root password: WhSd12
    - Default Shell: Bash
    - Username: henry
    - Password: You know it
    - Connect to Wireless
    - Location: en_GB.UTF-8
18. Enabling SSH
    - Open raspi-config: "sudo raspi-config"
    - Interface Options
    - SSH
    - Enable
19. To use SSH, we need the Raspberry Pi's IP Address
    - "ip a": 192.168.1.109/24
20. You can now connect to the Raspberry Pi on your laptop via [SSH](https://raspberrytips.com/ssh-guide-raspberry-pi/)
    - "ssh root@192.168.1.109"
21. Power off the Raspberry pi with "poweroff"
 


#### **Useful features of Armbian / Raspberry Pi**

Here is a list of the useful features that I can make use of:
- You can remotely connect to the Raspberry Pi several ways. The best looks like via SSH. Here is the [guide](https://linuxhint.com/enable-ssh-raspberry-pi/).


<br><br>


### **Arduino**

#### **Core Details**

- My Arduino is a Elegoo Uno R3.
    - Clock speed is 16 MHz
    - 32 KB of Flash Memory
- No inbuilt Wifi! Need an ESP8266 Wifi Module (£3).
- Battery test
    - 2x AA lasted for 3 days on a simple program.
    - Running off a battery may not be viable.

