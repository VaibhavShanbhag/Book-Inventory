1. Create s3 Bucket. Add Bucket Name.
2. Upload your files to the s3 bucket by drag and drop.
3. Create IAM Role for the ec2 instance to communicate with s3 bucket. Go to IAM-> Roles-> Create New Role-> Select AWS Service. Select ec2 and click next. select amazon s3 full access and click on next. Give name for your role.
4. Create a security group. Go to ec2 and on the left side find security group. click on create security group.
5. Create new key pair. give the name of the key and download it.
6. create instance give it iam role, security group and exitsing key pair.
7.download putty
8.inside putty go to auth and browsee it to the key-pair
9. go to seesion and write ec2-user@public_ip_ec2
10. Type the below commands

SSH Commands:
<br>
sudo su
yum update -y
yum install httpd -y
chkconfig httpd on
cd /var/www/html
aws s3 sync s3://remote_S3_bucket_name /var/www/html
service httpd start

11. copy the public ip and paste it in new tab.
