CREATE DATABASE contact_jay;
USE contact_jay;
CREATE TABLE tblPersonalDetails (
    pdId int primary key AUTO_INCREMENT,
    pdTitle varchar(255) not null,
    pdValue varchar(1024) not null,
    pdStatus char(1) not null default '1'
);
INSERT INTO tblPersonalDetails (pdTitle, pdValue)
VALUES ('firstname', 'Jay');
INSERT INTO tblPersonalDetails (pdTitle, pdValue)
VALUES ('lastname', 'Chauhan');
INSERT INTO tblPersonalDetails (pdTitle, pdValue)
VALUES ('email', 'jay.chauhan3042@gmail.com');
INSERT INTO tblPersonalDetails (pdTitle, pdValue)
VALUES ('phone1', '9313440532');
INSERT INTO tblPersonalDetails (pdTitle, pdValue)
VALUES ('phone2', '9664788574');
INSERT INTO tblPersonalDetails (pdTitle, pdValue)
VALUES ('address-apt', '1 Global Residency');
INSERT INTO tblPersonalDetails (pdTitle, pdValue)
VALUES ('address-lm', 'Ugat - Bhesan Road');
INSERT INTO tblPersonalDetails (pdTitle, pdValue)
VALUES ('address-area', 'Jahangirabad');
INSERT INTO tblPersonalDetails (pdTitle, pdValue)
VALUES ('address-city', 'Surat');
INSERT INTO tblPersonalDetails (pdTitle, pdValue)
VALUES ('address-state', 'Gujarat');
INSERT INTO tblPersonalDetails (pdTitle, pdValue)
VALUES ('address-country', 'India');
INSERT INTO tblPersonalDetails (pdTitle, pdValue)
VALUES ('address-pin', '395009');
INSERT INTO tblPersonalDetails (pdTitle, pdValue)
VALUES ('freelance', 'Avilable');
INSERT INTO tblPersonalDetails (pdTitle, pdValue)
VALUES (
        'typed-items',
        'Backend Developer, React / Vue Developer, Freelancer, Music Producer'
    );
CREATE TABLE tblUser (
    userId int primary key AUTO_INCREMENT,
    userName varchar(64) not null,
    userPassword char(128) not null
);
INSERT INTO tblUser (userName, userPassword)
VALUES (
        'admin@contact.com',
        '60d84299a0404e68af88b8a1f7f5339480ca4b05617e46a989cf67b2089dd6b43ec41ee9abbdb81786d74d1bd2193d4048063dcfd6238de63516a0892b059396'
    );
CREATE TABLE tblFacts (
    fId int primary key AUTO_INCREMENT,
    fTitle varchar(255) not null,
    fDigit varchar(5) not null,
    fIcon varchar(512) not null,
    fDesc varchar(512) not null
);
CREATE TABLE tblLinks (
    linkId int primary key AUTO_INCREMENT,
    linkName varchar(255) not null,
    linkAddress varchar(1024) not null,
    linkIcon varchar(255) not null,
    linkDownload char(1) not null default '0',
    linkTarget char(1) not null default '1'
);
INSERT INTO tblLinks (linkName, linkAddress, linkIcon)
VALUES (
        'Linkedin',
        'https://www.linkedin.com/in/jay-chauhan-7b4606234/',
        'bx bxl-linkedin'
    );
INSERT INTO tblLinks (linkName, linkAddress, linkIcon)
VALUES (
        'Github',
        'https://github.com/dj-jay3042',
        'bx bxl-github'
    );
INSERT INTO tblLinks (linkName, linkAddress, linkIcon)
VALUES (
        'Skype',
        'https://join.skype.com/invite/qCRS3mNfWaC0',
        'bx bxl-skype'
    );
INSERT INTO tblLinks (linkName, linkAddress, linkIcon)
VALUES (
        'Whatsapp',
        'https://wa.me/9313440532',
        'bx bxl-whatsapp'
    );
INSERT INTO tblLinks (linkName, linkAddress, linkIcon, linkDownload)
VALUES (
        'Resume',
        '/Jay_Chauhan_Resume.pdf',
        'bx bxs-download',
        '1'
    );
DROP TABLE tblImages;
CREATE TABLE tblImages (
    imgId int primary key AUTO_INCREMENT,
    imgTitle varchar(255) not null,
    imgFile varchar(1024) not null,
    imgAlt varchar(255) not null,
    imgHeight decimal(6, 2),
    imgWidth decimal(6, 2),
    imgStatus char(1) default '1'
);
INSERT INTO tblImages (imgTitle, imgFile, imgAlt)
VALUES (
        'profileImage',
        '/dist/img/profile-pic.png',
        'Jay Chauhan'
    );
INSERT INTO tblImages (imgTitle, imgFile, imgAlt)
VALUES (
        'bgImage',
        '/dist/img/background-pic.png',
        'Jay Chauhan'
    );
INSERT INTO tblImages (imgTitle, imgFile, imgAlt)
VALUES (
        'displayImage',
        '/dist/img/display-pic.png',
        'Jay Chauhan'
    );
CREATE TABLE tblEducation (
    eduId int primary key AUTO_INCREMENT,
    eduTitle varchar(128) not null,
    eduInstitute varchar(128) not null,
    eduCity varchar(128) not null,
    eduCountry varchar(4),
    eduDesc varchar(1024),
    eduStartDate date not null,
    eduEndDate date not null
);
CREATE TABLE tblExperience (
    expId int primary key AUTO_INCREMENT,
    expTitle varchar(255) not null,
    expCompany varchar(512) not null,
    expDesc varchar(1024),
    expCity varchar(512) not null,
    expCountry varchar(512) not null,
    expStartDate date not null,
    expEndDate date not null,
    flag char(1) default '0' not null
);
CREATE TABLE tblBruteforce (
    bfId int primary key AUTO_INCREMENT,
    bfIP varchar(39) not null,
    bfCount int not null,
    bfBrowserInfo varchar(512) not null,
    bfOperatingSystem varchar(128) not null,
    bfDeviceType varchar(128) not null,
    bfFailures timestamp not null default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP
);
CREATE TABLE tblBruteforce (
    bfId INT PRIMARY KEY AUTO_INCREMENT,
    bfIP VARCHAR(39) NOT NULL,
    bfCount INT NOT NULL,
    bfBrowserInfo VARCHAR(512) NOT NULL,
    bfOperatingSystem VARCHAR(128) NOT NULL,
    bfDeviceType VARCHAR(128) NOT NULL,
    bfFailures TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    UNIQUE KEY unique_bf_info (
        bfIP,
        bfBrowserInfo,
        bfOperatingSystem,
        bfDeviceType
    )
);
CREATE TABLE tbllSkills (
    skillId int primary key AUTO_INCREMENT,
    skillTitle varchar(128) not null,
    skillPercentage varchar(3) not null
);
CREATE TABLE tblContact (
    id int primary key AUTO_INCREMENT,
    name varchar(256) not null,
    email varchar(512) not null,
    subject varchar(256) not null,
    message text not null,
    reply text,
    mailSent char(1) not null default '0',
    replySent char(1) not null default '0',
    isViewed char(1) not null default '0',
    cTime datetime not null default CURRENT_TIMESTAMP
);
