create table fp (
    hersteller varchar(25),
    typ varchar(25),
    gb int(11),
    preis double,
    artnummer varchar(15),
    prod date,
    PRIMARY KEY(artnummer)
);

insert into fp (hersteller, typ, gb, preis, artnummer, prod)
values ("Quantum", "Firebal CX", 40, 112, "HDA-208", "2008-10-01");

insert into fp (hersteller, typ, gb, preis, artnummer, prod)
values ("Quantum", "Firebal Plus", 80, 128, "HDA-163", "2008-03-15");

insert into fp (hersteller, typ, gb, preis, artnummer, prod)
values ("Fujitsu", "MPE 3136", 160, 149, "HDA-171", "2008-09-01");

insert into fp (hersteller, typ, gb, preis, artnummer, prod)
values ("Seagate", "310232A", 60, 122, "HDA-144", "2008-11-15");

insert into fp (hersteller, typ, gb, preis, artnummer, prod)
values ("IBM Corporation", "DJNA 372200", 240, 230, "HDA-140", "2008-16-15");

select * from fp;