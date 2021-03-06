create table rapchieuphim(
     idrap int primary key not null AUTO_INCREMENT,
     namerap varchar(255) unique,
     Addressrap varchar(255),
     quan varchar(255),
     thanhpho varchar(255),
     image_daidien longtext,
     ngaymorap date,
     idcumrap int
     constraint  fk_rapchieuphim_cumrap foreign key(idcumrap) references cumrap(idcumrap)
)
create table cumrap(
    idcumrap int primary key not null AUTO_INCREMENT,
    namecumrap varchar(255) unique,
    
)
create table loaive(
id_loai int primary key not null AUTO_INCREMENT,
tenloai varchar(255) unique,
image longtext,
)
create table listfilm(
   id int primary key  not null  AUTO_INCREMENT,
   namefilm varchar(255),
   thoiluong varchar(255),
   ngaykhoichieu date,
   ngayketthuc date,
   contentfilm longtext,
   anhdaidien longtext,
   trailer longtext,
   id_loai int ,
   ngonngu longtext,
   daodien int,
   constraint fk_listfilm_loaive foreign key(id_loai) references loaive(id_loai),
   constraint fk_listfilm_daodien foreign key(daodien) references daodien(id_daodien)
)
create table rapchieuphim_listfilm(
  id int ,
  idrap int,
  primary key(id,idrap),
  constraint fk_this_rapchieuphim foreign key(idrap) references rapchieuphim(idrap),
  constraint fk_this_listfilm foreign key(id) references listfilm(id),
)
create table lichchieuphim(
  
  id_khuvuc int,
  id int ,
  giochieuphim int,
  ngaychieu date,
  primary key(id_khuvuc,giochieuphim,ngaychieu),
    constraint fk_lichchieuphim_khuvuc foreign key(id_khuvuc) references rapchieuphim_khuvucchieu(id_khuvuc),
  constraint fk_lichchieuphim_listfilm foreign key(id) references listfilm(id)
 
)
create table rapchieuphim_khuvucchieu(
   id_khuvuc int primary key not null AUTO_INCREMENT,
  name_khuvuc varchar(255)  not null,
  idrap int,
  soluonghangghe int,
  maxofghe int,
  sumofghe int,
  unique(name_khuvuc,idrap),
  constraint fk_khuvucchieu_rapchieuphim foreign key(idrap) references rapchieuphim(idrap)
  
)
create table hangghe_rapchieu(
    Ma_hangghe int primary key not null AUTO_INCREMENT,
    name_hangghe varchar(255),
    id_khuvuc int ,
    constraint fk_hangghe_khuvucchieu foreign key(id_khuvuc) references rapchieuphim_khuvucchieu(id_khuvuc)
)
create table soghe_rapchieu(
  Ma_soghe varchar(255) primary key not null,
  Ma_hangghe int,
  constraint fk_soghe foreign key(Ma_hangghe) references hangghe_rapchieu(Ma_hangghe)
)
create table pr(
 id_pr int primary key not null AUTO_INCREMENT,
 namepr varchar(255),
 contentpr longtext,
 imagepr longtext
)

create table element_of_people(
id_loainguoi int primary key not null AUTO_INCREMENT,
loainguoi varchar(255) unique,
)
create table giave(
id_giave int primary key not null AUTO_INCREMENT,
id_loai int,
id_loainguoi int,
ngay int,
giave int,
constraint fk_giave_loaive foreign key(id_loai) references(loaive),
constraint fk_giave_people foreign key(id_loainguoi) references(loainguoi)
)
insert into element_of_people values(0,'Người lớn');
insert into element_of_people values(0,'Sinh viên-Người cao tuổi');
insert into element_of_people values(0,'Trẻ em');
insert into element_of_people values(0,'G-Star');
create table bapnuoc(
id_bapnuoc int primary key not null AUTO_INCREMENT,
namebap varchar(255) unique not null,
detailbap longtext,
gia decimal(11,0),
imagebap longtext
)
create table thanhtoan(
id_thanhtoan int primary key not null AUTO_INCREMENT,
nameuser varchar(255),
phoneuser varchar(12),
namefilm longtext,
rapchieuphim longtext,
khuvucchieu longtext,
thoiluongfilm int,
soluongve int,
tongtienve decimal(10,0),
tongtienbapnuoc decimal(10,0),
tongtatca decimal(10,0),
giochieuphim  int,
ngaychieuphim date,
ngaythanhtoan date

)
create table thanhtoan_bapnuoc(
id_thanhtoan int not null,
id_bapnuoc int not null,
soluongbapnuoc int ,
 primary key(id_thanhtoan,id_bapnuoc),
 constraint fk_this_thanhtoan foreign key(id_thanhtoan) references thanhtoan(id_thanhtoan),
 constraint fk_this_bapnuoc foreign key(id_bapnuoc) references bapnuoc(id_bapnuoc)
)
create table thanhtoan_nguoi(
id_giave int not null,
id_thanhtoan int not null,
soluong int not null,
primary key(id_giave,id_thanhtoan),
constraint fk_thanhtoannguoi_thanhtoan foreign key(id_thanhtoan) references thanhtoan(id_thanhtoan),
constraint fk_thanhtoannguoi_giave foreign key(id_giave) references giave(id_giave)
)


create table gheso(
id_ghe int primary key not null AUTO_INCREMENT,
id_khuvuc int ,
tenghe varchar(255),
id_thanhtoan int,

constraint fk_gheso_thanhtoan foreign key(id_thanhtoan) references thanhtoan(id_thanhtoan),
constraint fk_gheso_khuvuc foreign key(id_khuvuc) references rapchieuphim_khuvucchieu(id_khuvuc)
)
create table dienvien(
id_dienvien int primary key not null AUTO_INCREMENT,
tendienvien varchar(255)unique
)
create table daodien(
id_daodien int primary key not null AUTO_INCREMENT,
tendaodien varchar(255)unique
)

create table dienvien_listfilm(
id_dienvien int,
id int ,
primary key(id_dienvien,id),
constraint fk_thisdienvien_listfilm foreign key(id) references listfilm(id),
constraint fk_thisdienvien2_dienvien foreign key(id_dienvien) references dienvien(id_dienvien)
)
create table theloaiphim(
id_theloai int  primary key not null AUTO_INCREMENT,
tentheloai varchar(255)unique
)
create table theloai_listfilm(
id_theloai int ,
id int,
primary key(id_theloai,id),
constraint fk_thistheloai_listfilm foreign key(id) references listfilm(id),
constraint fk_thislistfilmtheloai_theloai foreign key(id_theloai) references theloaiphim(id_theloai)
)
create table capdo(
id_capdo int primary key not null AUTO_INCREMENT,
namecapdo varchar(255)not null unique,
phantram int
descriptioncapdo longtext not null,
)
insert into capdo values(0,'Thành viên',0,'Chưa có ưu đãi cho thẻ thành viên');
insert into capdo values(0,'Đồng',5,'Được tăng giảm 1% so với gia trị tổng vé sau khi thanh toán(Áp dụng cho từng thẻ quà tặng)');
insert into capdo values(0,'Bạc',10,'Được tăng giảm 2% so với gia trị tổng vé sau khi thanh toán(Áp dụng cho từng thẻ quà tặng)');
insert into capdo values(0,'Vàng',20,'Được tăng giảm 5% so với gia trị tổng vé sau khi thanh toán(Áp dụng cho từng thẻ quà tặng)');
insert into capdo values(0,'Bạch kim',40,'Được tăng giảm 10% so với gia trị tổng vé sau khi thanh toán(Áp dụng cho từng thẻ quà tặng)');
insert into capdo values(0,'Kim cương',70,'Được tăng giảm 15% so với gia trị tổng vé sau khi thanh toán(Áp dụng cho từng thẻ quà tặng)');
insert into capdo values(0,'Vip 1',90,'Được tăng giảm 20% so với gia trị tổng vé sau khi thanh toán(Áp dụng cho từng thẻ quà tặng)');
insert into capdo values(0,'Vip 2',100,'Được tăng giảm 50% so với gia trị tổng vé sau khi thanh toán(Áp dụng cho từng thẻ quà tặng)');
create table thequatang_member(
id int ,
id_capdo int,
action bit,
primary key(id,id_capdo),
constraint fk_thequatang_member foreign key(id) references member(id),
constraint fk_thequatang_capdo foreign key(id_capdo) references capdo(id_capdo), 

)
