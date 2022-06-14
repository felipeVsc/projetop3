-- Table: public.disciplinas

-- DROP TABLE IF EXISTS public.disciplinas;

CREATE TABLE IF NOT EXISTS public.disciplinas
(
    "idDisciplina" character(15) COLLATE pg_catalog."default" NOT NULL,
    "nameDisciplina" character(255) COLLATE pg_catalog."default" NOT NULL,
    CONSTRAINT disciplinas_pkey PRIMARY KEY ("idDisciplina")
)

TABLESPACE pg_default;

ALTER TABLE IF EXISTS public.disciplinas
    OWNER to postgres;