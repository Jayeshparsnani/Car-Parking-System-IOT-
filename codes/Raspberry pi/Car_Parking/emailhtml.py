from email.mime.multipart import MIMEMultipart
from email.mime.text import MIMEText
import smtplib


host = "smtp.gmail.com"
port = 587
username = "dm2808.py@gmail.com"
password = "Mramesh123"
from_email = username
to_list = ["jairajkumarmulani007@gmail.com"]

try:
    email_conn = smtplib.SMTP(host, port)
    email_conn.ehlo()
    email_conn.starttls()
    email_conn.login(username, password)
    the_msg = MIMEMultipart("alternative")
    the_msg['Subject'] = "Parking Receipt!"
    the_msg["From"] = from_email
    #the_msg["To"]  = to_list[0]
    plain_txt = "Paring Receipt"
    html_txt = """\
    <html>
      <head></head>
      <body>
        <p>Hey!<br>
          Testing this email <b>message</b>. Made by <a href='http://joincfe.com'>Team CFE</a>.
        </p>
      </body>
    </html>
    """
    part_1 = MIMEText(plain_txt, 'plain')
    part_2 = MIMEText(html_txt, "html")
    the_msg.attach(part_1)
    the_msg.attach(part_2)
    email_conn.sendmail(from_email, to_list, the_msg.as_string())
    email_conn.quit()
except smtplib.SMTPException:
    print("error sending message")