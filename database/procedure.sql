use vcard_db;
/*below insert procedure for customer_tbl */
DELIMITER //
create or replace procedure in_Customer(IN userName varchar(64), IN emailId varchar(64), IN password varchar(64), IN createdAt varchar(64))
BEGIN
   INSERT INTO vcard_db.customer_tbl 
                    (username,email_id,password,created_at) 
                     VALUES
                    (userName,emailId,password,createdAt);
END //
DELIMITER;
/*below insert procedure for services_tbl */
DELIMITER //
create or replace procedure in_Services(IN profileId int(11), IN serviceName varchar(50), IN serviceImage varchar(255), IN createdAt varchar(64))
BEGIN
   INSERT INTO vcard_db.services_tbl 
                    (profile_id,service_name,service_image,created_at) 
                     VALUES
                    (profileId,serviceName,serviceImage,createdAt);
END //
DELIMITER;
/*below insert procedure for payment_tbl */
DELIMITER //
create or replace procedure in_Payment(IN profileId int(11), IN paytm varchar(20), IN googlePay varchar(20), IN accountHolderName varchar(20),IN accountNumber varchar(20), IN ifscCode varchar(20),IN bankName varchar(50), IN gstNumber varchar(20), IN createdAt varchar(25))
BEGIN
   INSERT INTO vcard_db.payment_tbl
                    (profile_id,paytm,google_pay,account_holder_name,account_number,ifsc_code,bank_name,gst_number,created_at) 
                     VALUES
                    (profileId,paytm,googlePay,accountHolderName,accountNumber,ifscCode,bankName,gstNumber,createdAt);
END //
DELIMITER;

/*below insert procedure for profile_tbl */
DELIMITER //
create or replace procedure in_Profile(IN customerId int(11), IN firstName varchar(20), IN middleName varchar(20), IN lastName varchar(20),IN callNumber varchar(12), IN waNumber varchar(12),IN personalEmail varchar(50), IN address varchar(256), IN aboutUs varchar(512),IN createdAt varchar(25))
BEGIN
   INSERT INTO vcard_db.profile_tbl
                    (customer_id, first_name, middle_name, last_name, call_number, wa_number, personal_email, address, about_us, created_at) 
                     VALUES
                    (customerId,firstName,middleName,lastName,callNumber,waNumber,personalEmail,address,aboutUs,createdAt);
END //
DELIMITER;

/*below insert procedure for social_tbl */
DELIMITER //
create or replace procedure in_Social(IN profileId int(11), IN youtubeLink varchar(255), IN facebookLink varchar(255), IN linkedinLink varchar(255),IN instagramLink varchar(255), IN twitterLink varchar(255),IN createdAt varchar(25))
BEGIN
   INSERT INTO vcard_db.social_tbl
                    (profile_id, youtube_link,facebook_link, linkedin_link, instagram_link, twitter_link, created_at) 
                     VALUES
                    (profileId,youtubeLink,facebookLink,linkedinLink,instagramLink,twitterLink,createdAt);
END //
DELIMITER;
/*below insert procedure for youtube_tbl */
DELIMITER //
create or replace procedure in_Youtube(IN profileId int(11), IN videoLink varchar(255), createdAt varchar(25))
BEGIN
   INSERT INTO vcard_db.youtube_tbl
                    (profile_id, video_link, created_at) 
                     VALUES
                    (profileId,videoLink,createdAt);
END //
DELIMITER;

/* start  writing for selectall data from  tables*/
/*below select procedure for customer_tbl */
DELIMITER //
create or replace procedure get_all_customer()
BEGIN
   SELECT * FROM customer_tbl;
END //
DELIMITER;


/*below select procedure for payment_tbl */
DELIMITER //
create or replace procedure get_all_payment()
BEGIN
   SELECT * FROM payment_tbl;
END //
DELIMITER;


/*below select procedure for profile_tbl */
DELIMITER //
create or replace procedure get_all_profile()
BEGIN
   SELECT * FROM profile_tbl;
END //
DELIMITER;


/*below select procedure for services_tbl */
DELIMITER //
create or replace procedure get_all_services()
BEGIN
   SELECT * FROM services_tbl;
END //
DELIMITER;


/*below select procedure for social_tbl */
DELIMITER //
create or replace procedure get_all_social()
BEGIN
   SELECT * FROM social_tbl;
END //
DELIMITER;


/*below select procedure for youtube_tbl */
DELIMITER //
create or replace procedure get_all_youtube()
BEGIN
   SELECT * FROM youtube_tbl;
END //
DELIMITER;

/*For Login of Customer*/
DELIMITER $$
CREATE PROCEDURE `login_Customer` (IN `e_id` VARCHAR(64), IN `pass` VARCHAR(64))  BEGIN
   SELECT email_id,password FROM vcard_db.customer_tbl
   		WHERE
        	email_id=e_id
        AND
        	password=pass;
END$$
DELIMITER ;