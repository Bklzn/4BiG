--
-- PostgreSQL database dump
--

-- Dumped from database version 14.2
-- Dumped by pg_dump version 14.2

-- Started on 2022-05-28 16:09:30

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

DROP DATABASE "cookie_13-03";
--
-- TOC entry 3374 (class 1262 OID 16394)
-- Name: cookie_13-03; Type: DATABASE; Schema: -; Owner: postgres
--

CREATE DATABASE "cookie_13-03" WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE = 'Polish_Poland.1250';


ALTER DATABASE "cookie_13-03" OWNER TO postgres;

\connect -reuse-previous=on "dbname='cookie_13-03'"

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

--
-- TOC entry 3375 (class 0 OID 0)
-- Dependencies: 3374
-- Name: DATABASE "cookie_13-03"; Type: COMMENT; Schema: -; Owner: postgres
--

COMMENT ON DATABASE "cookie_13-03" IS 'cookie creator db, date: 13-03-22, version: 1';


--
-- TOC entry 833 (class 1247 OID 16409)
-- Name: position; Type: TYPE; Schema: public; Owner: postgres
--

CREATE TYPE public."position" AS ENUM (
    'client',
    'employee',
    'administrator'
);


ALTER TYPE public."position" OWNER TO postgres;

--
-- TOC entry 839 (class 1247 OID 16423)
-- Name: product_category; Type: TYPE; Schema: public; Owner: postgres
--

CREATE TYPE public.product_category AS ENUM (
    'package',
    'base',
    'upgraded_base',
    'fruits',
    'nuts',
    'chocolate'
);


ALTER TYPE public.product_category OWNER TO postgres;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- TOC entry 213 (class 1259 OID 16465)
-- Name: Cookie; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public."Cookie" (
    "ID" integer NOT NULL,
    name character varying,
    description character varying,
    "User_ID" integer
);


ALTER TABLE public."Cookie" OWNER TO postgres;

--
-- TOC entry 214 (class 1259 OID 16472)
-- Name: Cookie_order; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public."Cookie_order" (
    "Cook_ID" integer NOT NULL,
    "Orde_ID" integer NOT NULL
);


ALTER TABLE public."Cookie_order" OWNER TO postgres;

--
-- TOC entry 215 (class 1259 OID 16485)
-- Name: Cookie_product; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public."Cookie_product" (
    "Prod_ID" integer NOT NULL,
    "Cook_ID" integer NOT NULL
);


ALTER TABLE public."Cookie_product" OWNER TO postgres;

--
-- TOC entry 209 (class 1259 OID 16395)
-- Name: Nutrition_label; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public."Nutrition_label" (
    energy integer DEFAULT 0 NOT NULL,
    fat_total real DEFAULT 0 NOT NULL,
    f_saturated real DEFAULT 0 NOT NULL,
    carbohydrate real DEFAULT 0 NOT NULL,
    c_sugars real DEFAULT 0 NOT NULL,
    fibre real DEFAULT 0 NOT NULL,
    protein real DEFAULT 0 NOT NULL,
    salt real DEFAULT 0 NOT NULL,
    "Prod_ID" integer NOT NULL
);


ALTER TABLE public."Nutrition_label" OWNER TO postgres;

--
-- TOC entry 212 (class 1259 OID 16451)
-- Name: Order; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public."Order" (
    "ID" integer NOT NULL,
    "User_ID" integer,
    first_name character varying NOT NULL,
    last_name character varying NOT NULL,
    street_name character varying NOT NULL,
    building_num character varying NOT NULL,
    apartament_num character varying,
    zip_code character varying NOT NULL,
    city character varying NOT NULL,
    packed_date date,
    send_date date,
    received_date date,
    "e-mail" character varying NOT NULL,
    phone_num character varying NOT NULL,
    nip character varying,
    pickup character varying,
    package_num character varying,
    CONSTRAINT packed_send CHECK ((send_date >= packed_date)),
    CONSTRAINT send_receive CHECK ((received_date >= send_date))
);


ALTER TABLE public."Order" OWNER TO postgres;

--
-- TOC entry 211 (class 1259 OID 16435)
-- Name: Product; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public."Product" (
    "ID" integer NOT NULL,
    name character varying(50) NOT NULL,
    weight real NOT NULL,
    price money NOT NULL,
    category public.product_category NOT NULL,
    "threeD_model" text NOT NULL,
    svg_model text NOT NULL,
    subname character varying NOT NULL,
    description character varying NOT NULL,
    ingredients character varying
);


ALTER TABLE public."Product" OWNER TO postgres;

--
-- TOC entry 216 (class 1259 OID 16498)
-- Name: Property; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public."Property" (
    "ID" integer NOT NULL,
    name character varying NOT NULL,
    svg_model character varying NOT NULL
);


ALTER TABLE public."Property" OWNER TO postgres;

--
-- TOC entry 217 (class 1259 OID 16505)
-- Name: Property_product; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public."Property_product" (
    "Prop_ID" integer NOT NULL,
    "Prod_ID" integer NOT NULL
);


ALTER TABLE public."Property_product" OWNER TO postgres;

--
-- TOC entry 210 (class 1259 OID 16415)
-- Name: User; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public."User" (
    "ID" integer NOT NULL,
    "e-mail" character varying(50) NOT NULL,
    passw character varying NOT NULL,
    nick character varying NOT NULL,
    permission public."position" NOT NULL
);


ALTER TABLE public."User" OWNER TO postgres;

--
-- TOC entry 3218 (class 2606 OID 16471)
-- Name: Cookie Cookie_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public."Cookie"
    ADD CONSTRAINT "Cookie_pkey" PRIMARY KEY ("ID");


--
-- TOC entry 3216 (class 2606 OID 16459)
-- Name: Order Order_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public."Order"
    ADD CONSTRAINT "Order_pkey" PRIMARY KEY ("ID");


--
-- TOC entry 3214 (class 2606 OID 16441)
-- Name: Product Product_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public."Product"
    ADD CONSTRAINT "Product_pkey" PRIMARY KEY ("ID");


--
-- TOC entry 3220 (class 2606 OID 16504)
-- Name: Property Property_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public."Property"
    ADD CONSTRAINT "Property_pkey" PRIMARY KEY ("ID");


--
-- TOC entry 3212 (class 2606 OID 16421)
-- Name: User User_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public."User"
    ADD CONSTRAINT "User_pkey" PRIMARY KEY ("ID");


--
-- TOC entry 3221 (class 2606 OID 16518)
-- Name: Nutrition_label Prod_key; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public."Nutrition_label"
    ADD CONSTRAINT "Prod_key" FOREIGN KEY ("Prod_ID") REFERENCES public."Product"("ID") ON UPDATE CASCADE ON DELETE CASCADE NOT VALID;


--
-- TOC entry 3222 (class 2606 OID 16460)
-- Name: Order User_ID; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public."Order"
    ADD CONSTRAINT "User_ID" FOREIGN KEY ("User_ID") REFERENCES public."User"("ID");


--
-- TOC entry 3223 (class 2606 OID 16523)
-- Name: Cookie User_key; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public."Cookie"
    ADD CONSTRAINT "User_key" FOREIGN KEY ("User_ID") REFERENCES public."User"("ID") NOT VALID;


--
-- TOC entry 3224 (class 2606 OID 16475)
-- Name: Cookie_order cookie; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public."Cookie_order"
    ADD CONSTRAINT cookie FOREIGN KEY ("Cook_ID") REFERENCES public."Cookie"("ID");


--
-- TOC entry 3227 (class 2606 OID 16493)
-- Name: Cookie_product cookie; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public."Cookie_product"
    ADD CONSTRAINT cookie FOREIGN KEY ("Cook_ID") REFERENCES public."Cookie"("ID") NOT VALID;


--
-- TOC entry 3225 (class 2606 OID 16480)
-- Name: Cookie_order order; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public."Cookie_order"
    ADD CONSTRAINT "order" FOREIGN KEY ("Orde_ID") REFERENCES public."Order"("ID") NOT VALID;


--
-- TOC entry 3226 (class 2606 OID 16488)
-- Name: Cookie_product product; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public."Cookie_product"
    ADD CONSTRAINT product FOREIGN KEY ("Prod_ID") REFERENCES public."Product"("ID");


--
-- TOC entry 3228 (class 2606 OID 16508)
-- Name: Property_product product_key; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public."Property_product"
    ADD CONSTRAINT product_key FOREIGN KEY ("Prod_ID") REFERENCES public."Product"("ID");


--
-- TOC entry 3229 (class 2606 OID 16513)
-- Name: Property_product property_key; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public."Property_product"
    ADD CONSTRAINT property_key FOREIGN KEY ("Prop_ID") REFERENCES public."Property"("ID") NOT VALID;


-- Completed on 2022-05-28 16:09:30

--
-- PostgreSQL database dump complete
--

