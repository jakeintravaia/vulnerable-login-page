# Vulnerable Login Page
A simple HTML/CSS/PHP login page for practice with wireshark HTTP packet sniffing.

# Objective
The information security company "SecureIt" has quite a few flaws in its website, one being there is no SSL Certificate! Use wireshark to sniff HTTP requests and find the raw login data SecureIt's website is sending over the network.

# Instructions
1. To run a server, you're going to need to install PHP7 on your computer, here is a tutorial to follow:

https://www.youtube.com/watch?v=iW0B9NTId2g

2. Once you've installed PHP7 on your computer and added the folder to your PATH, launch Command Prompt

3. Once in CMD, navigate to wherever you extracted the folder to using the <b>pwd</b>, <b>ls</b>, and <b>cd</b> commands

4. When you open up the LoginPage folder, type the command "php -S localhost:8000" (without quotations)
to start a simple PHP server

5. Open your preferred browser and navigate to localhost:8000

6. From here you'll be taken to an unsecured http login page, you can now login using the provided credentials.

7. Open up wireshark and try to intercept the raw login data that is sent over the network!

# Credentials

<b>Username:</b> <summary>admin</summary>

<b>Password:</b> <summary>password</summary>
