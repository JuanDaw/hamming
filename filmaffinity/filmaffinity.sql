DROP TABLE IF EXISTS titulos CASCADE;

CREATE TABLE titulos
(
    id     bigserial   PRIMARY KEY
  , titulo varchar(255)
);

DROP TABLE IF EXISTS paises CASCADE;

CREATE TABLE paises 
(
    id     bigserial    PRIMARY KEY
  , pais   varchar(255) NOT NULL
)

DROP TABLE IF EXISTS fichas CASCADE;

CREATE TABLE fichas 
(
    id                  bigserial PRIMARY KEY
  , titulo_original_id  bigint    REFERENCES titulos (id)
  , titulo_destacado_id bigint    REFERENCES titulos (id)
  , anyo                numeric(4)
  , duracion            smallint
  , pais_id             bigint
);

DROP TABLE IF EXISTS resto_titulos CASCADE;

CREATE TABLE resto_titulos
(
    ficha_id  bigint NOT NULL REFERENCES fichas (id)
  , titulo_id bigint NOT NULL REFERENCES titulos (id)
  , PRIMARY KEY (ficha_id, titulo_id)
);

CREATE VIEW fichas_titulos AS
SELECT id, titulo_destacado_id
  FROM fichas
 UNION
SELECT id, titulo_original_id
  FROM fichas
 UNION
SELECT ficha_id, titulo_id
  FROM resto_titulos;