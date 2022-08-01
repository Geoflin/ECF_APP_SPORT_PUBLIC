CREATE TABLE API_CLIENTS (
    client_id int NOT NULL AUTO_INCREMENT,
    client_secret varchar(255) NOT NULL,
    client_name varchar(255) NOT NULL,
    active varchar(255) NOT NULL,

    short_description varchar(255) NOT NULL,
    full_description varchar(255) NOT NULL,
    logo_url varchar(255) NOT NULL,
    url varchar(255) NOT NULL,

    dpo varchar(255) NOT NULL,
    technical_contact varchar(255) NOT NULL,
    commercial_contact varchar(255) NOT NULL,
    PRIMARY KEY (client_id)
);

CREATE TABLE API_CLIENTS_GRANTS (
    branch_id int NOT NULL AUTO_INCREMENT,
    active int(255) NOT NULL,
    perms TEXT(255) NOT NULL,
    PRIMARY KEY (branch_id),
    FOREIGN KEY (branch_id) REFERENCES API_CLIENTS(client_id),
    FOREIGN KEY (branch_id) REFERENCES API_INSTALL_PERM(install_id)
);

CREATE TABLE API_INSTALL_PERM (
    install_id int NOT NULL AUTO_INCREMENT,

    members_read int(255) NOT NULL,
    members_write int(255) NOT NULL,
    members_add int(255) NOT NULL,
    members_products_add int(255) NOT NULL,

    members_payment_schedules_read int(255) NOT NULL,
    members_statistiques_read int(255) NOT NULL,
    members_subscription_read int(255) NOT NULL,
    payment_schedules_read int(255) NOT NULL,

    payment_schedules_write int(255) NOT NULL,
    payment_day_read int(255) NOT NULL,

    PRIMARY KEY (install_id),
    FOREIGN KEY (install_id) REFERENCES API_CLIENTS_GRANTS(branch_id),
    FOREIGN KEY (install_id) REFERENCES API_CLIENTS(client_id)
);