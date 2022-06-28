PGDMP          -                z           cookie_13-03    14.2    14.2                 0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            !           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            "           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            #           1262    16394    cookie_13-03    DATABASE     j   CREATE DATABASE "cookie_13-03" WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE = 'Polish_Poland.1250';
    DROP DATABASE "cookie_13-03";
                postgres    false            $           0    0    DATABASE "cookie_13-03"    COMMENT     W   COMMENT ON DATABASE "cookie_13-03" IS 'cookie creator db, date: 13-03-22, version: 1';
                   postgres    false    3363            ?           1247    16409    position    TYPE     ]   CREATE TYPE public."position" AS ENUM (
    'client',
    'employee',
    'administrator'
);
    DROP TYPE public."position";
       public          postgres    false            E           1247    16423    product_category    TYPE     �   CREATE TYPE public.product_category AS ENUM (
    'package',
    'base',
    'upgraded_base',
    'fruits',
    'nuts',
    'chocolate'
);
 #   DROP TYPE public.product_category;
       public          postgres    false            �            1259    16465    Cookie    TABLE     X   CREATE TABLE public."Cookie" (
    "ID" integer NOT NULL,
    name character varying
);
    DROP TABLE public."Cookie";
       public         heap    postgres    false            �            1259    16472    Cookie_order    TABLE     g   CREATE TABLE public."Cookie_order" (
    "Cook_ID" integer NOT NULL,
    "Orde_ID" integer NOT NULL
);
 "   DROP TABLE public."Cookie_order";
       public         heap    postgres    false            �            1259    16485    Cookie_product    TABLE     i   CREATE TABLE public."Cookie_product" (
    "Prod_ID" integer NOT NULL,
    "Cook_ID" integer NOT NULL
);
 $   DROP TABLE public."Cookie_product";
       public         heap    postgres    false            �            1259    16395    Nutrition_label    TABLE     v  CREATE TABLE public."Nutrition_label" (
    "ID" integer NOT NULL,
    energy integer DEFAULT 0 NOT NULL,
    fat_total real DEFAULT 0 NOT NULL,
    f_saturated real DEFAULT 0 NOT NULL,
    carbohydrate real DEFAULT 0 NOT NULL,
    c_sugars real DEFAULT 0 NOT NULL,
    fibre real DEFAULT 0 NOT NULL,
    protein real DEFAULT 0 NOT NULL,
    salt real DEFAULT 0 NOT NULL
);
 %   DROP TABLE public."Nutrition_label";
       public         heap    postgres    false            �            1259    16451    Order    TABLE     `  CREATE TABLE public."Order" (
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
    CONSTRAINT packed_send CHECK ((send_date >= packed_date)),
    CONSTRAINT send_receive CHECK ((received_date >= send_date))
);
    DROP TABLE public."Order";
       public         heap    postgres    false            �            1259    16435    Product    TABLE       CREATE TABLE public."Product" (
    "ID" integer NOT NULL,
    "Nutr_ID" integer,
    name character varying(50) NOT NULL,
    weight real NOT NULL,
    price money NOT NULL,
    category public.product_category NOT NULL,
    "threeD_model" text NOT NULL,
    svg_model text NOT NULL
);
    DROP TABLE public."Product";
       public         heap    postgres    false    837            �            1259    16415    User    TABLE     �   CREATE TABLE public."User" (
    "ID" integer NOT NULL,
    "e-mail" character varying(50) NOT NULL,
    passw character varying NOT NULL,
    nick character varying NOT NULL,
    permission public."position" NOT NULL
);
    DROP TABLE public."User";
       public         heap    postgres    false    831            �           2606    16471    Cookie Cookie_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public."Cookie"
    ADD CONSTRAINT "Cookie_pkey" PRIMARY KEY ("ID");
 @   ALTER TABLE ONLY public."Cookie" DROP CONSTRAINT "Cookie_pkey";
       public            postgres    false    213            �           2606    16407 $   Nutrition_label Nutrition_label_pkey 
   CONSTRAINT     h   ALTER TABLE ONLY public."Nutrition_label"
    ADD CONSTRAINT "Nutrition_label_pkey" PRIMARY KEY ("ID");
 R   ALTER TABLE ONLY public."Nutrition_label" DROP CONSTRAINT "Nutrition_label_pkey";
       public            postgres    false    209            �           2606    16459    Order Order_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public."Order"
    ADD CONSTRAINT "Order_pkey" PRIMARY KEY ("ID");
 >   ALTER TABLE ONLY public."Order" DROP CONSTRAINT "Order_pkey";
       public            postgres    false    212            �           2606    16441    Product Product_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public."Product"
    ADD CONSTRAINT "Product_pkey" PRIMARY KEY ("ID");
 B   ALTER TABLE ONLY public."Product" DROP CONSTRAINT "Product_pkey";
       public            postgres    false    211            �           2606    16421    User User_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public."User"
    ADD CONSTRAINT "User_pkey" PRIMARY KEY ("ID");
 <   ALTER TABLE ONLY public."User" DROP CONSTRAINT "User_pkey";
       public            postgres    false    210            �           2606    16442    Product Nutr_ID    FK CONSTRAINT     �   ALTER TABLE ONLY public."Product"
    ADD CONSTRAINT "Nutr_ID" FOREIGN KEY ("Nutr_ID") REFERENCES public."Nutrition_label"("ID");
 =   ALTER TABLE ONLY public."Product" DROP CONSTRAINT "Nutr_ID";
       public          postgres    false    3204    209    211            �           2606    16460    Order User_ID    FK CONSTRAINT     u   ALTER TABLE ONLY public."Order"
    ADD CONSTRAINT "User_ID" FOREIGN KEY ("User_ID") REFERENCES public."User"("ID");
 ;   ALTER TABLE ONLY public."Order" DROP CONSTRAINT "User_ID";
       public          postgres    false    210    3206    212            �           2606    16475    Cookie_order cookie    FK CONSTRAINT     {   ALTER TABLE ONLY public."Cookie_order"
    ADD CONSTRAINT cookie FOREIGN KEY ("Cook_ID") REFERENCES public."Cookie"("ID");
 ?   ALTER TABLE ONLY public."Cookie_order" DROP CONSTRAINT cookie;
       public          postgres    false    213    214    3212            �           2606    16493    Cookie_product cookie    FK CONSTRAINT     �   ALTER TABLE ONLY public."Cookie_product"
    ADD CONSTRAINT cookie FOREIGN KEY ("Cook_ID") REFERENCES public."Cookie"("ID") NOT VALID;
 A   ALTER TABLE ONLY public."Cookie_product" DROP CONSTRAINT cookie;
       public          postgres    false    213    215    3212            �           2606    16480    Cookie_order order    FK CONSTRAINT     �   ALTER TABLE ONLY public."Cookie_order"
    ADD CONSTRAINT "order" FOREIGN KEY ("Orde_ID") REFERENCES public."Order"("ID") NOT VALID;
 @   ALTER TABLE ONLY public."Cookie_order" DROP CONSTRAINT "order";
       public          postgres    false    3210    214    212            �           2606    16488    Cookie_product product    FK CONSTRAINT        ALTER TABLE ONLY public."Cookie_product"
    ADD CONSTRAINT product FOREIGN KEY ("Prod_ID") REFERENCES public."Product"("ID");
 B   ALTER TABLE ONLY public."Cookie_product" DROP CONSTRAINT product;
       public          postgres    false    211    215    3208           