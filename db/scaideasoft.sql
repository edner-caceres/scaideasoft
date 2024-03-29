-- SQL Manager Lite for PostgreSQL 5.2.0.3
-- ---------------------------------------
-- Host      : localhost
-- Database  : scaideasoft
-- Version   : PostgreSQL 9.2.1, compiled by Visual C++ build 1600, 64-bit



SET search_path = inventory, pg_catalog;
DROP TABLE IF EXISTS inventory.items;
DROP TABLE IF EXISTS inventory.features;
DROP TABLE IF EXISTS inventory.pieces;
DROP TABLE IF EXISTS inventory.manufacturers;
DROP TABLE IF EXISTS inventory.equipments;
DROP TABLE IF EXISTS inventory.categories;
SET search_path = shared, pg_catalog;
DROP TABLE IF EXISTS shared.status;
DROP SCHEMA IF EXISTS inventory;
DROP SCHEMA IF EXISTS shared;
CREATE SCHEMA inventory AUTHORIZATION postgres;
CREATE SCHEMA shared AUTHORIZATION postgres;
SET check_function_bodies = false;
--
-- Structure for table status (OID = 17777) : 
--
CREATE TABLE shared.status (
    id serial NOT NULL,
    name_status varchar(50) NOT NULL,
    description_of_status text,
    is_delete boolean DEFAULT false NOT NULL
)
WITH (oids = false);
--
-- Structure for table categories (OID = 17789) : 
--
SET search_path = inventory, pg_catalog;
CREATE TABLE inventory.categories (
    id serial NOT NULL,
    category_id integer,
    category_name varchar(50) NOT NULL,
    category_description text,
    category_image varchar(255),
    is_delete boolean DEFAULT false NOT NULL
)
WITH (oids = false);
--
-- Structure for table equipments (OID = 17806) : 
--
CREATE TABLE inventory.equipments (
    id serial NOT NULL,
    status_id integer NOT NULL,
    category_id integer NOT NULL,
    nia varchar(50) NOT NULL,
    code char(32) NOT NULL,
    name_equipment varchar(50) NOT NULL,
    description_equipment text,
    is_delete boolean DEFAULT false NOT NULL
)
WITH (oids = false);
--
-- Structure for table manufacturers (OID = 17828) : 
--
CREATE TABLE inventory.manufacturers (
    id serial NOT NULL,
    manufacturer_name varchar(50) NOT NULL,
    manufacturer_description text,
    is_delete boolean DEFAULT false NOT NULL
)
WITH (oids = false);
--
-- Structure for table pieces (OID = 17840) : 
--
CREATE TABLE inventory.pieces (
    id serial NOT NULL,
    manufacturer_id integer NOT NULL,
    piece_name varchar(50) NOT NULL,
    model varchar(255) NOT NULL,
    is_internal_piece boolean NOT NULL,
    piece_description text,
    is_delete boolean DEFAULT false NOT NULL
)
WITH (oids = false);
--
-- Structure for table features (OID = 17857) : 
--
CREATE TABLE inventory.features (
    id serial NOT NULL,
    piece_id integer NOT NULL,
    feature_name varchar(255) NOT NULL,
    feature_value varchar(255) NOT NULL,
    is_delete boolean DEFAULT false NOT NULL
)
WITH (oids = false);
--
-- Structure for table items (OID = 17874) : 
--
CREATE TABLE inventory.items (
    id serial NOT NULL,
    item_id integer,
    status_id integer NOT NULL,
    equipment_id integer NOT NULL,
    piece_id integer NOT NULL,
    serial_number varchar(255) NOT NULL,
    start_date date NOT NULL,
    end_date date,
    is_delete boolean DEFAULT false NOT NULL
)
WITH (oids = false);
SET search_path = shared, pg_catalog;
--
-- Data for table shared.status (OID = 17777) (LIMIT 0,4)
--
INSERT INTO status (id, name_status, description_of_status, is_delete)
VALUES (1, 'enable', '', false);

INSERT INTO status (id, name_status, description_of_status, is_delete)
VALUES (2, 'disabled', '', false);

INSERT INTO status (id, name_status, description_of_status, is_delete)
VALUES (3, 'active', '', false);

INSERT INTO status (id, name_status, description_of_status, is_delete)
VALUES (4, 'maintenance', '', true);

SET search_path = inventory, pg_catalog;
--
-- Data for table inventory.categories (OID = 17789) (LIMIT 0,6)
--
INSERT INTO categories (id, category_id, category_name, category_description, category_image, is_delete)
VALUES (1, NULL, 'General', NULL, NULL, false);

INSERT INTO categories (id, category_id, category_name, category_description, category_image, is_delete)
VALUES (2, 1, 'Electronicos', '', '', false);

INSERT INTO categories (id, category_id, category_name, category_description, category_image, is_delete)
VALUES (3, 2, 'Computacion', '', '', false);

INSERT INTO categories (id, category_id, category_name, category_description, category_image, is_delete)
VALUES (4, 3, 'Computadora', '', '', false);

INSERT INTO categories (id, category_id, category_name, category_description, category_image, is_delete)
VALUES (5, 3, 'Red', '', '', false);

INSERT INTO categories (id, category_id, category_name, category_description, category_image, is_delete)
VALUES (6, 3, 'Impresoras', '', '', false);

--
-- Data for table inventory.equipments (OID = 17806) (LIMIT 0,23)
--
INSERT INTO equipments (id, status_id, category_id, nia, code, name_equipment, description_equipment, is_delete)
VALUES (15, 1, 4, '00-CMP-20130320-014', 'CMP014', 'IS-TRAINING01', 'Equipo de computacion usado para desarrollo por uno de los programadores', false);

INSERT INTO equipments (id, status_id, category_id, nia, code, name_equipment, description_equipment, is_delete)
VALUES (1, 1, 4, '00-SRV-20130320-001', 'SRV001', 'SRV01', '', false);

INSERT INTO equipments (id, status_id, category_id, nia, code, name_equipment, description_equipment, is_delete)
VALUES (3, 1, 4, '00-CMP-20130320-002', 'CMP002', 'IS02', 'Equipo de computacion usado para desarrollo por uno de los programadores', false);

INSERT INTO equipments (id, status_id, category_id, nia, code, name_equipment, description_equipment, is_delete)
VALUES (2, 1, 4, '00-CMP-20130320-001', 'CMP001', 'IS01', 'Equipo de computacion usado para desarrollo por uno de los programadores', false);

INSERT INTO equipments (id, status_id, category_id, nia, code, name_equipment, description_equipment, is_delete)
VALUES (4, 1, 4, '00-CMP-20130320-003', 'CMP003', 'IS03', 'Equipo de computacion usado para desarrollo por uno de los programadores', false);

INSERT INTO equipments (id, status_id, category_id, nia, code, name_equipment, description_equipment, is_delete)
VALUES (5, 1, 4, '00-CMP-20130320-004', 'CMP004', 'IS04', 'Equipo de computacion usado para desarrollo por uno de los programadores', false);

INSERT INTO equipments (id, status_id, category_id, nia, code, name_equipment, description_equipment, is_delete)
VALUES (6, 1, 4, '00-CMP-20130320-005', 'CMP005', 'IS05', 'Equipo de computacion usado para desarrollo por uno de los programadores', false);

INSERT INTO equipments (id, status_id, category_id, nia, code, name_equipment, description_equipment, is_delete)
VALUES (7, 1, 4, '00-CMP-20130320-006', 'CMP006', 'IS06', 'Equipo de computacion usado para desarrollo por uno de los programadores', false);

INSERT INTO equipments (id, status_id, category_id, nia, code, name_equipment, description_equipment, is_delete)
VALUES (8, 1, 4, '00-CMP-20130320-007', 'CMP007', 'IS07', 'Equipo de computacion usado para desarrollo por uno de los programadores', false);

INSERT INTO equipments (id, status_id, category_id, nia, code, name_equipment, description_equipment, is_delete)
VALUES (9, 1, 4, '00-CMP-20130320-008', 'CMP008', 'IS08', 'Equipo de computacion usado para desarrollo por uno de los programadores', false);

INSERT INTO equipments (id, status_id, category_id, nia, code, name_equipment, description_equipment, is_delete)
VALUES (10, 1, 4, '00-CMP-20130320-009', 'CMP009', 'IS09', 'Equipo de computacion usado para desarrollo por uno de los programadores', false);

INSERT INTO equipments (id, status_id, category_id, nia, code, name_equipment, description_equipment, is_delete)
VALUES (11, 1, 4, '00-CMP-20130320-010', 'CMP010', 'IS10', 'Equipo de computacion usado para desarrollo por uno de los programadores', false);

INSERT INTO equipments (id, status_id, category_id, nia, code, name_equipment, description_equipment, is_delete)
VALUES (12, 1, 4, '00-CMP-20130320-011', 'CMP011', 'IS11', 'Equipo de computacion usado para desarrollo por uno de los programadores', false);

INSERT INTO equipments (id, status_id, category_id, nia, code, name_equipment, description_equipment, is_delete)
VALUES (13, 1, 4, '00-CMP-20130320-012', 'CMP012', 'IS12', 'Equipo de computacion usado para desarrollo por uno de los programadores', false);

INSERT INTO equipments (id, status_id, category_id, nia, code, name_equipment, description_equipment, is_delete)
VALUES (14, 1, 4, '00-CMP-20130320-013', 'CMP013', 'IS13', 'Equipo de computacion usado para desarrollo por uno de los programadores', false);

INSERT INTO equipments (id, status_id, category_id, nia, code, name_equipment, description_equipment, is_delete)
VALUES (16, 1, 4, '00-CMP-20130320-015', 'CMP015', 'IS15', 'Equipo de computacion usado para desarrollo por uno de los programadores', false);

INSERT INTO equipments (id, status_id, category_id, nia, code, name_equipment, description_equipment, is_delete)
VALUES (17, 1, 4, '00-CMP-20130320-016', 'CMP016', 'IS16', 'Equipo de computacion usado para desarrollo por uno de los programadores', false);

INSERT INTO equipments (id, status_id, category_id, nia, code, name_equipment, description_equipment, is_delete)
VALUES (19, 1, 4, '00-CMP-20130320-018', 'CMP018', 'IS18', 'Equipo de computacion usado para desarrollo por uno de los programadores', false);

INSERT INTO equipments (id, status_id, category_id, nia, code, name_equipment, description_equipment, is_delete)
VALUES (18, 1, 4, '00-CMP-20130320-017', 'CMP017', 'IS17', 'Equipo de computacion usado para desarrollo por uno de los programadores', false);

INSERT INTO equipments (id, status_id, category_id, nia, code, name_equipment, description_equipment, is_delete)
VALUES (20, 1, 4, '00-CMP-20130320-019', 'CMP019', 'IS19', 'Equipo de computacion usado para desarrollo por uno de los programadores', false);

INSERT INTO equipments (id, status_id, category_id, nia, code, name_equipment, description_equipment, is_delete)
VALUES (21, 1, 4, '00-CMP-20130320-020', 'CMP020', 'IS20', 'Equipo de computacion usado para desarrollo por uno de los programadores', false);

INSERT INTO equipments (id, status_id, category_id, nia, code, name_equipment, description_equipment, is_delete)
VALUES (22, 1, 4, '00-CMP-20130320-021', 'CMP021', 'IS21', 'Equipo de computacion usado para desarrollo por uno de los programadores', false);

INSERT INTO equipments (id, status_id, category_id, nia, code, name_equipment, description_equipment, is_delete)
VALUES (23, 1, 4, '00-CMP-20130320-022', 'CMP022', 'IS22', 'Equipo de computacion usado para desarrollo por uno de los programadores', false);

--
-- Data for table inventory.manufacturers (OID = 17828) (LIMIT 0,9)
--
INSERT INTO manufacturers (id, manufacturer_name, manufacturer_description, is_delete)
VALUES (1, 'HP', '', false);

INSERT INTO manufacturers (id, manufacturer_name, manufacturer_description, is_delete)
VALUES (2, 'Delux', '', false);

INSERT INTO manufacturers (id, manufacturer_name, manufacturer_description, is_delete)
VALUES (3, 'Samsung', '', false);

INSERT INTO manufacturers (id, manufacturer_name, manufacturer_description, is_delete)
VALUES (4, 'Intel', '', false);

INSERT INTO manufacturers (id, manufacturer_name, manufacturer_description, is_delete)
VALUES (5, 'Kingston', '', false);

INSERT INTO manufacturers (id, manufacturer_name, manufacturer_description, is_delete)
VALUES (6, 'Maxtor', '', false);

INSERT INTO manufacturers (id, manufacturer_name, manufacturer_description, is_delete)
VALUES (7, 'Sure', '', false);

INSERT INTO manufacturers (id, manufacturer_name, manufacturer_description, is_delete)
VALUES (8, 'LG', '', false);

INSERT INTO manufacturers (id, manufacturer_name, manufacturer_description, is_delete)
VALUES (9, 'Super Power', '', false);

--
-- Data for table inventory.pieces (OID = 17840) (LIMIT 0,10)
--
INSERT INTO pieces (id, manufacturer_id, piece_name, model, is_internal_piece, piece_description, is_delete)
VALUES (1, 3, 'Monitor', 'SyncMaster 2033', false, '', false);

INSERT INTO pieces (id, manufacturer_id, piece_name, model, is_internal_piece, piece_description, is_delete)
VALUES (2, 4, 'MotherBoard', 'DH67CL', true, '', false);

INSERT INTO pieces (id, manufacturer_id, piece_name, model, is_internal_piece, piece_description, is_delete)
VALUES (5, 2, 'Case', 'Tower', false, '', false);

INSERT INTO pieces (id, manufacturer_id, piece_name, model, is_internal_piece, piece_description, is_delete)
VALUES (4, 5, 'Memory', '1', true, '', false);

INSERT INTO pieces (id, manufacturer_id, piece_name, model, is_internal_piece, piece_description, is_delete)
VALUES (3, 6, 'HardDisk', 'DiamondMax 22', true, '', false);

INSERT INTO pieces (id, manufacturer_id, piece_name, model, is_internal_piece, piece_description, is_delete)
VALUES (6, 7, 'Monitor', 'SR-L19W', false, '', false);

INSERT INTO pieces (id, manufacturer_id, piece_name, model, is_internal_piece, piece_description, is_delete)
VALUES (8, 7, 'Case', 'Tower', false, '', false);

INSERT INTO pieces (id, manufacturer_id, piece_name, model, is_internal_piece, piece_description, is_delete)
VALUES (9, 8, 'Monitor', 'E2041', false, '', false);

INSERT INTO pieces (id, manufacturer_id, piece_name, model, is_internal_piece, piece_description, is_delete)
VALUES (10, 2, 'Teclado', 'K3100', false, 'Teclado Multimedia color negro en español', false);

INSERT INTO pieces (id, manufacturer_id, piece_name, model, is_internal_piece, piece_description, is_delete)
VALUES (11, 9, 'Case', 'SP', false, '', false);

--
-- Data for table inventory.features (OID = 17857) (LIMIT 0,11)
--
INSERT INTO features (id, piece_id, feature_name, feature_value, is_delete)
VALUES (1, 1, 'Tipo', 'LCD', false);

INSERT INTO features (id, piece_id, feature_name, feature_value, is_delete)
VALUES (2, 1, 'Tamaño', '19"', false);

INSERT INTO features (id, piece_id, feature_name, feature_value, is_delete)
VALUES (3, 4, 'Capacidad', '2 Gb', false);

INSERT INTO features (id, piece_id, feature_name, feature_value, is_delete)
VALUES (4, 4, 'Frecuencia', '1333Mhz', false);

INSERT INTO features (id, piece_id, feature_name, feature_value, is_delete)
VALUES (5, 4, 'Tipo', 'DDRII', false);

INSERT INTO features (id, piece_id, feature_name, feature_value, is_delete)
VALUES (6, 3, 'Capacidad', '320Gb', false);

INSERT INTO features (id, piece_id, feature_name, feature_value, is_delete)
VALUES (7, 3, 'Conector', 'SATA', false);

INSERT INTO features (id, piece_id, feature_name, feature_value, is_delete)
VALUES (8, 6, 'Tamaño', '19"', false);

INSERT INTO features (id, piece_id, feature_name, feature_value, is_delete)
VALUES (9, 9, 'Tamaño', '20"', false);

INSERT INTO features (id, piece_id, feature_name, feature_value, is_delete)
VALUES (10, 9, 'Tipo', 'LED', false);

INSERT INTO features (id, piece_id, feature_name, feature_value, is_delete)
VALUES (11, 6, 'Tipo', 'LCD', false);

--
-- Data for table inventory.items (OID = 17874) (LIMIT 0,10)
--
INSERT INTO items (id, item_id, status_id, equipment_id, piece_id, serial_number, start_date, end_date, is_delete)
VALUES (1, NULL, 1, 1, 1, 'dsadsa dsa ds ad', '2013-03-20', NULL, false);

INSERT INTO items (id, item_id, status_id, equipment_id, piece_id, serial_number, start_date, end_date, is_delete)
VALUES (2, NULL, 1, 2, 1, 'fsfafdfdsafd', '2013-03-20', NULL, false);

INSERT INTO items (id, item_id, status_id, equipment_id, piece_id, serial_number, start_date, end_date, is_delete)
VALUES (8, NULL, 1, 4, 5, 'sn', '2013-03-20', NULL, false);

INSERT INTO items (id, item_id, status_id, equipment_id, piece_id, serial_number, start_date, end_date, is_delete)
VALUES (7, 8, 1, 4, 4, '222', '2013-03-20', NULL, false);

INSERT INTO items (id, item_id, status_id, equipment_id, piece_id, serial_number, start_date, end_date, is_delete)
VALUES (6, 8, 1, 4, 4, '111', '2013-03-20', NULL, false);

INSERT INTO items (id, item_id, status_id, equipment_id, piece_id, serial_number, start_date, end_date, is_delete)
VALUES (5, 8, 1, 4, 3, '1', '2013-03-20', NULL, false);

INSERT INTO items (id, item_id, status_id, equipment_id, piece_id, serial_number, start_date, end_date, is_delete)
VALUES (4, 8, 1, 4, 2, '1', '2013-03-20', NULL, false);

INSERT INTO items (id, item_id, status_id, equipment_id, piece_id, serial_number, start_date, end_date, is_delete)
VALUES (3, 8, 1, 4, 1, 'CM20H9LS935230B CL', '2013-03-20', NULL, false);

INSERT INTO items (id, item_id, status_id, equipment_id, piece_id, serial_number, start_date, end_date, is_delete)
VALUES (9, NULL, 1, 15, 3, '9SZ29N2T', '2013-03-21', '2013-03-21', false);

INSERT INTO items (id, item_id, status_id, equipment_id, piece_id, serial_number, start_date, end_date, is_delete)
VALUES (10, NULL, 1, 15, 4, '1', '2013-03-21', '2013-03-21', false);

--
-- Definition for index pk_status (OID = 17785) : 
--
SET search_path = shared, pg_catalog;
ALTER TABLE ONLY status
    ADD CONSTRAINT pk_status
    PRIMARY KEY (id);
--
-- Definition for index pk_categories (OID = 17797) : 
--
SET search_path = inventory, pg_catalog;
ALTER TABLE ONLY categories
    ADD CONSTRAINT pk_categories
    PRIMARY KEY (id);
--
-- Definition for index fk_parent_category (OID = 17799) : 
--
ALTER TABLE ONLY categories
    ADD CONSTRAINT fk_parent_category
    FOREIGN KEY (category_id) REFERENCES categories(id) ON UPDATE CASCADE ON DELETE CASCADE;
--
-- Definition for index pk_equipments (OID = 17814) : 
--
ALTER TABLE ONLY equipments
    ADD CONSTRAINT pk_equipments
    PRIMARY KEY (id);
--
-- Definition for index fk_category (OID = 17816) : 
--
ALTER TABLE ONLY equipments
    ADD CONSTRAINT fk_category
    FOREIGN KEY (category_id) REFERENCES categories(id) ON UPDATE CASCADE ON DELETE CASCADE;
--
-- Definition for index fk_status (OID = 17821) : 
--
ALTER TABLE ONLY equipments
    ADD CONSTRAINT fk_status
    FOREIGN KEY (status_id) REFERENCES shared.status(id) ON UPDATE CASCADE ON DELETE CASCADE;
--
-- Definition for index pk_manufacturers (OID = 17836) : 
--
ALTER TABLE ONLY manufacturers
    ADD CONSTRAINT pk_manufacturers
    PRIMARY KEY (id);
--
-- Definition for index pk_pieces (OID = 17848) : 
--
ALTER TABLE ONLY pieces
    ADD CONSTRAINT pk_pieces
    PRIMARY KEY (id);
--
-- Definition for index fk_manufacturer (OID = 17850) : 
--
ALTER TABLE ONLY pieces
    ADD CONSTRAINT fk_manufacturer
    FOREIGN KEY (manufacturer_id) REFERENCES manufacturers(id) ON UPDATE CASCADE ON DELETE CASCADE;
--
-- Definition for index pk_features (OID = 17865) : 
--
ALTER TABLE ONLY features
    ADD CONSTRAINT pk_features
    PRIMARY KEY (id);
--
-- Definition for index fk_pieces (OID = 17867) : 
--
ALTER TABLE ONLY features
    ADD CONSTRAINT fk_pieces
    FOREIGN KEY (piece_id) REFERENCES pieces(id) ON UPDATE CASCADE ON DELETE CASCADE;
--
-- Definition for index pk_items (OID = 17879) : 
--
ALTER TABLE ONLY items
    ADD CONSTRAINT pk_items
    PRIMARY KEY (id);
--
-- Definition for index fk_parent_item (OID = 17881) : 
--
ALTER TABLE ONLY items
    ADD CONSTRAINT fk_parent_item
    FOREIGN KEY (item_id) REFERENCES items(id) ON UPDATE CASCADE ON DELETE CASCADE;
--
-- Definition for index fk_equipment (OID = 17886) : 
--
ALTER TABLE ONLY items
    ADD CONSTRAINT fk_equipment
    FOREIGN KEY (equipment_id) REFERENCES equipments(id) ON UPDATE CASCADE ON DELETE CASCADE;
--
-- Definition for index fk_piece (OID = 17891) : 
--
ALTER TABLE ONLY items
    ADD CONSTRAINT fk_piece
    FOREIGN KEY (piece_id) REFERENCES pieces(id) ON UPDATE CASCADE ON DELETE CASCADE;
--
-- Definition for index fk_in_status (OID = 17896) : 
--
ALTER TABLE ONLY items
    ADD CONSTRAINT fk_in_status
    FOREIGN KEY (status_id) REFERENCES shared.status(id) ON UPDATE CASCADE ON DELETE CASCADE;
--
-- Data for sequence shared.status_id_seq (OID = 17775)
--
SET search_path = shared, pg_catalog;
SELECT pg_catalog.setval('status_id_seq', 4, true);
--
-- Data for sequence inventory.categories_id_seq (OID = 17787)
--
SET search_path = inventory, pg_catalog;
SELECT pg_catalog.setval('categories_id_seq', 6, true);
--
-- Data for sequence inventory.equipments_id_seq (OID = 17804)
--
SELECT pg_catalog.setval('equipments_id_seq', 23, true);
--
-- Data for sequence inventory.manufacturers_id_seq (OID = 17826)
--
SELECT pg_catalog.setval('manufacturers_id_seq', 9, true);
--
-- Data for sequence inventory.pieces_id_seq (OID = 17838)
--
SELECT pg_catalog.setval('pieces_id_seq', 11, true);
--
-- Data for sequence inventory.features_id_seq (OID = 17855)
--
SELECT pg_catalog.setval('features_id_seq', 11, true);
--
-- Data for sequence inventory.items_id_seq (OID = 17872)
--
SELECT pg_catalog.setval('items_id_seq', 10, true);
--
-- Comments
--
COMMENT ON SCHEMA public IS 'standard public schema';
