-- Table: public.modulos

-- DROP TABLE IF EXISTS public.modulos;

CREATE TABLE IF NOT EXISTS public.modulos
(
    "idModulo" integer NOT NULL GENERATED ALWAYS AS IDENTITY ( INCREMENT 1 START 1 MINVALUE 1 MAXVALUE 2147483647 CACHE 1 ),
    modulo character(255) COLLATE pg_catalog."default" NOT NULL,
    "idDisciplina" character(15) COLLATE pg_catalog."default" NOT NULL,
    CONSTRAINT modulos_pkey PRIMARY KEY ("idModulo"),
    CONSTRAINT "idDisciplina_Disciplinas" FOREIGN KEY ("idDisciplina")
        REFERENCES public.disciplinas ("idDisciplina") MATCH SIMPLE
        ON UPDATE RESTRICT
        ON DELETE RESTRICT
        NOT VALID
)

TABLESPACE pg_default;

ALTER TABLE IF EXISTS public.modulos
    OWNER to postgres;