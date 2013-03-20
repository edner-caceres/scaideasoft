/*==============================================================*/
/* Table: status                                                */
/*==============================================================*/
create table shared.status (
   id            			serial               not null,
   name_status          	varchar(50)          not null,
   description_of_status 	text                 null,
   is_delete            	bool                 not null default false,
   constraint pk_status primary key (id)
);

/*==============================================================*/
/* Table: categories                                            */
/*==============================================================*/
create table inventory.categories (
   id						serial			not null,
   category_id				int4			null,
   category_name			varchar(50)		not null,
   category_description		text			null,
   category_image			varchar(255)	null,
   is_delete				bool			not null default false,
   constraint pk_categories primary key (id),
   constraint fk_parent_category foreign key (category_id)  references inventory.categories (id) on delete cascade on update cascade
);

/*==============================================================*/
/* Table: equipments                                            */
/*==============================================================*/
create table inventory.equipments (
   id						serial               not null,
   status_id            	int4                 not null,
   category_id          	int4                 not null,
   nia                  	varchar(50)          not null,
   code                 	char(32)             not null,
   name_equipment       	varchar(50)          not null,
   description_equipment 	text                 null,
   is_delete            	bool                 not null default false,
   constraint pk_equipments primary key (id),
   constraint fk_category foreign key (category_id) references inventory.categories (id) on delete cascade on update cascade,
   constraint fk_status foreign key (status_id) references shared.status (id) on delete cascade on update cascade
);

/*==============================================================*/
/* Table: manufacturers                                         */
/*==============================================================*/
create table inventory.manufacturers (
   id      					serial               not null,
   manufacturer_name    	varchar(50)          not null,
   manufacturer_description	text                 null,
   is_delete            	bool                 not null default false,
   constraint pk_manufacturers primary key (id)
);

/*==============================================================*/
/* Table: pieces                                                */
/*==============================================================*/
create table inventory.pieces (
   id             			serial               not null,
   manufacturer_id      	int4                 not null,
   piece_name           	varchar(50)          not null,
   model       				varchar(255)         not null,
   is_internal_piece    	bool                 not null,
   piece_description    	text                 null,
   is_delete            	bool                 not null default false,
   constraint pk_pieces primary key (id),
   constraint fk_manufacturer foreign key (manufacturer_id) references inventory.manufacturers (id) on delete cascade on update cascade
);

/*==============================================================*/
/* Table: features                                              */
/*==============================================================*/
create table inventory.features (
   id           			serial               not null,
   piece_id             	int4                 not null,
   feature_name         	varchar(255)         not null,
   feature_value        	varchar(255)         not null,
   is_delete            	bool                 not null default false,
   constraint pk_features primary key (id),
   constraint fk_pieces foreign key (piece_id) references inventory.pieces (id) on delete cascade on update cascade
);

/*==============================================================*/
/* Table: items                                                 */
/*==============================================================*/
create table inventory.items (
   id              			serial               not null,
   item_id          		int4                 null,
   status_id            	int4                 not null,
   equipment_id         	int4                 not null,
   piece_id             	int4                 not null,
   serial_number        	varchar(255)         not null,
   start_date           	date                 not null,
   end_date             	date                 null,
   is_delete            	bool                 not null default false,
   constraint pk_items primary key (id),
   constraint fk_parent_item foreign key (item_id) references inventory.items (id) on delete cascade on update cascade,
   constraint fk_equipment foreign key (equipment_id) references inventory.equipments (id) on delete cascade on update cascade,
   constraint fk_piece foreign key (piece_id) references inventory.pieces (id) on delete cascade on update cascade,
   constraint fk_in_status foreign key (status_id) references shared.status (id) on delete cascade on update cascade
);

