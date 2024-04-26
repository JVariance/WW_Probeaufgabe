# WW Probeaufgabe

## Anleitung

1. MySQL starten
2. Mit mySQL verbinden (z.B. mit Beekeeper Studio)
   1. localhost:3306
   2. User: root
3. Datenbank einrichten:
```mysql
create table `teammembers` (
	`id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	`first_name` varchar(100) NOT NULL,
	`last_name` varchar(100) NOT NULL,
	`image_url` varchar(100) NOT NULL,
	`email` varchar(100) NOT NULL
)
```
```mysql
insert into teammembers (first_name,last_name,image_url,email)
values ('Monika', 'Petersen', 'petersen-monika.png', 'monikapetersen@loremipsum.de')
```
```mysql
insert into teammembers (first_name,last_name,image_url,email)
values ('Leon', 'Knirsch', 'knirsch-leon.png', 'leonknirsch@loremipsum.de')
```
4. eventuell `php artisan migrate`
5. `npm run dev`
6. `php .\artisan serve`

## Hinweise

### Animationen
Animationen sind mit CSS umgesetzt. Die Startanimationen mithilfe von tailwindcss-animated, die "scroll"-Animationen mithilfe der relativ neuen view-timeline-API.
Firefox deaktiviert die view-timeline/animation-timeline/scroll-timeline zurzeit standardmäßig. Safari hat noch keine Umsetzung. Wenn ein konsistenter Auftritt mitsamt Animationen über alle Browser hinweg zwingend erforderlich/erwünscht ist, kann natürlich auf JavaScript (z.B. gsap) zurückgegriffen werden.

### Navigation
Das Navigations-Menü ist in der mobilen Ansicht als Hamburger-Menü und mithilfe der neuen CSS popover-API umgesetzt die eine gute Browser-Unterstützung mitbringt. Für den Fall, dass die API noch nicht unterstützt wird, wird die Navigation mithilfe der CSS @supports not-Regel dauerhaft angezeigt.