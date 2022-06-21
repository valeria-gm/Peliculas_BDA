USE pelianalitic;

-- Review

INSERT INTO review (usuario_id, pelicula_id, calificacion, resena, fecha) 
VALUES 
(7, 1, 10, 'Lloré toda la película. Cumple su propósito.', 2022-01-28),
(7, 40, 5, 'Terrible final.', 2022-02-08),
(4, 41, 7, 'Palomera.', 2022-07-20),
(2, 68, 2, 'Meh.', 2022-04-12),
(6, 68, 1, 'Me salí de la sala. Una falta de respeto al arte', 2021-01-28),
(6, 1, 8, 'Me cambió la vida. El cine ha despertado.', 2021-12-18),
(6, 63, 8, 'Matrix, un clásico indispensable.', 2021-10-13)
;
