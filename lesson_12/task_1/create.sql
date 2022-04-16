alter table Actors add id_film int;
update Actors set id_film = 1 where age = 49 or age = 59;
update Actors set id_film = 2 where age = 55;
update Actors set id_film = 3 where age = 43 or age = 44;
update Actors set id_film = 4 where age = 36;
update Actors set id_film = 5 where age = 35 or age = 40;

 alter table Films drop director;
 alter table Films add id_director int;
 update Films set id_director = 1 where name = 'The Invisible Man';
 update Films set id_director = 2 where name = 'Soul';
 update Films set id_director = 3 where name = 'Blonde';
 update Films set id_director = 4 where name = 'Dune';
 update Films set id_director = 5 where name = 'The Power of the Dog';

 alter table Directors drop film;
 INSERT INTO Directors (name, surname, is_famous) VALUES ('Denis', 'Oliver', TRUE);



mysqldump -u root -p Films > filmsL12_dump.sql 