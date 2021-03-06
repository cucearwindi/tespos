PGDMP         5                z            db_pos    9.4.14    12.3 )    `           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            a           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            b           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            c           1262    441643    db_pos    DATABASE     ?   CREATE DATABASE db_pos WITH TEMPLATE = template0 ENCODING = 'UTF8' LC_COLLATE = 'en_US.UTF-8' LC_CTYPE = 'en_US.UTF-8' TABLESPACE = ts_pos;
    DROP DATABASE db_pos;
                postgres    false            d           0    0    SCHEMA public    ACL     ?   REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;
                   postgres    false    6            ?            1259    441646    t_kategori_produk    TABLE     ~   CREATE TABLE public.t_kategori_produk (
    id_kategori integer NOT NULL,
    nama_kategori character varying(50) NOT NULL
);
 %   DROP TABLE public.t_kategori_produk;
       public            postgres    false            ?            1259    441644 !   t_kategori_produk_id_kategori_seq    SEQUENCE     ?   CREATE SEQUENCE public.t_kategori_produk_id_kategori_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 8   DROP SEQUENCE public.t_kategori_produk_id_kategori_seq;
       public          postgres    false    174            e           0    0 !   t_kategori_produk_id_kategori_seq    SEQUENCE OWNED BY     g   ALTER SEQUENCE public.t_kategori_produk_id_kategori_seq OWNED BY public.t_kategori_produk.id_kategori;
          public          postgres    false    173            ?            1259    441690    t_log    TABLE     ?   CREATE TABLE public.t_log (
    id_log integer NOT NULL,
    aktivitas character varying(50) NOT NULL,
    id_produk integer,
    user_eksekusi character varying(50) NOT NULL,
    "timestamp" timestamp without time zone DEFAULT now() NOT NULL
);
    DROP TABLE public.t_log;
       public            postgres    false            ?            1259    441686    t_log_id_log_seq    SEQUENCE     y   CREATE SEQUENCE public.t_log_id_log_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.t_log_id_log_seq;
       public          postgres    false    181            f           0    0    t_log_id_log_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public.t_log_id_log_seq OWNED BY public.t_log.id_log;
          public          postgres    false    180            ?            1259    441664    t_produk    TABLE     '  CREATE TABLE public.t_produk (
    id_produk integer NOT NULL,
    id_kategori integer NOT NULL,
    nama_produk character varying(50) NOT NULL,
    detail_produk text NOT NULL,
    harga numeric(11,0) NOT NULL,
    url_gambar character varying(200) NOT NULL,
    path character varying(200)
);
    DROP TABLE public.t_produk;
       public            postgres    false            ?            1259    441660    t_produk_id_produk_seq    SEQUENCE        CREATE SEQUENCE public.t_produk_id_produk_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 -   DROP SEQUENCE public.t_produk_id_produk_seq;
       public          postgres    false    178            g           0    0    t_produk_id_produk_seq    SEQUENCE OWNED BY     Q   ALTER SEQUENCE public.t_produk_id_produk_seq OWNED BY public.t_produk.id_produk;
          public          postgres    false    177            ?            1259    441654    t_role    TABLE     k   CREATE TABLE public.t_role (
    id_role integer NOT NULL,
    nama_role character varying(50) NOT NULL
);
    DROP TABLE public.t_role;
       public            postgres    false            ?            1259    441652    t_role_id_role_seq    SEQUENCE     {   CREATE SEQUENCE public.t_role_id_role_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.t_role_id_role_seq;
       public          postgres    false    176            h           0    0    t_role_id_role_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.t_role_id_role_seq OWNED BY public.t_role.id_role;
          public          postgres    false    175            ?            1259    441678    t_user    TABLE     ?   CREATE TABLE public.t_user (
    username character varying(50) NOT NULL,
    password character varying(50) NOT NULL,
    id_role integer NOT NULL,
    flag integer DEFAULT 1 NOT NULL
);
    DROP TABLE public.t_user;
       public            postgres    false            ?
           2604    441649    t_kategori_produk id_kategori    DEFAULT     ?   ALTER TABLE ONLY public.t_kategori_produk ALTER COLUMN id_kategori SET DEFAULT nextval('public.t_kategori_produk_id_kategori_seq'::regclass);
 L   ALTER TABLE public.t_kategori_produk ALTER COLUMN id_kategori DROP DEFAULT;
       public          postgres    false    174    173    174            ?
           2604    441693    t_log id_log    DEFAULT     l   ALTER TABLE ONLY public.t_log ALTER COLUMN id_log SET DEFAULT nextval('public.t_log_id_log_seq'::regclass);
 ;   ALTER TABLE public.t_log ALTER COLUMN id_log DROP DEFAULT;
       public          postgres    false    181    180    181            ?
           2604    441667    t_produk id_produk    DEFAULT     x   ALTER TABLE ONLY public.t_produk ALTER COLUMN id_produk SET DEFAULT nextval('public.t_produk_id_produk_seq'::regclass);
 A   ALTER TABLE public.t_produk ALTER COLUMN id_produk DROP DEFAULT;
       public          postgres    false    177    178    178            ?
           2604    441657    t_role id_role    DEFAULT     p   ALTER TABLE ONLY public.t_role ALTER COLUMN id_role SET DEFAULT nextval('public.t_role_id_role_seq'::regclass);
 =   ALTER TABLE public.t_role ALTER COLUMN id_role DROP DEFAULT;
       public          postgres    false    176    175    176            V          0    441646    t_kategori_produk 
   TABLE DATA                 public          postgres    false    174   ?-       ]          0    441690    t_log 
   TABLE DATA                 public          postgres    false    181   (.       Z          0    441664    t_produk 
   TABLE DATA                 public          postgres    false    178   /       X          0    441654    t_role 
   TABLE DATA                 public          postgres    false    176   E0       [          0    441678    t_user 
   TABLE DATA                 public          postgres    false    179   ?0       i           0    0 !   t_kategori_produk_id_kategori_seq    SEQUENCE SET     O   SELECT pg_catalog.setval('public.t_kategori_produk_id_kategori_seq', 8, true);
          public          postgres    false    173            j           0    0    t_log_id_log_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.t_log_id_log_seq', 11, true);
          public          postgres    false    180            k           0    0    t_produk_id_produk_seq    SEQUENCE SET     E   SELECT pg_catalog.setval('public.t_produk_id_produk_seq', 19, true);
          public          postgres    false    177            l           0    0    t_role_id_role_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.t_role_id_role_seq', 2, false);
          public          postgres    false    175            ?
           2606    441651 (   t_kategori_produk t_kategori_produk_pkey 
   CONSTRAINT     o   ALTER TABLE ONLY public.t_kategori_produk
    ADD CONSTRAINT t_kategori_produk_pkey PRIMARY KEY (id_kategori);
 R   ALTER TABLE ONLY public.t_kategori_produk DROP CONSTRAINT t_kategori_produk_pkey;
       public            postgres    false    174            ?
           2606    441696    t_log t_log_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public.t_log
    ADD CONSTRAINT t_log_pkey PRIMARY KEY (id_log);
 :   ALTER TABLE ONLY public.t_log DROP CONSTRAINT t_log_pkey;
       public            postgres    false    181            ?
           2606    441726 !   t_produk t_produk_nama_produk_key 
   CONSTRAINT     c   ALTER TABLE ONLY public.t_produk
    ADD CONSTRAINT t_produk_nama_produk_key UNIQUE (nama_produk);
 K   ALTER TABLE ONLY public.t_produk DROP CONSTRAINT t_produk_nama_produk_key;
       public            postgres    false    178            ?
           2606    441673    t_produk t_produk_pkey 
   CONSTRAINT     [   ALTER TABLE ONLY public.t_produk
    ADD CONSTRAINT t_produk_pkey PRIMARY KEY (id_produk);
 @   ALTER TABLE ONLY public.t_produk DROP CONSTRAINT t_produk_pkey;
       public            postgres    false    178            ?
           2606    441659    t_role t_role_pkey 
   CONSTRAINT     U   ALTER TABLE ONLY public.t_role
    ADD CONSTRAINT t_role_pkey PRIMARY KEY (id_role);
 <   ALTER TABLE ONLY public.t_role DROP CONSTRAINT t_role_pkey;
       public            postgres    false    176            ?
           2606    441684    t_user t_user_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.t_user
    ADD CONSTRAINT t_user_pkey PRIMARY KEY (username);
 <   ALTER TABLE ONLY public.t_user DROP CONSTRAINT t_user_pkey;
       public            postgres    false    179            ?
           2606    441703    t_log t_log_ibfk_1    FK CONSTRAINT     ?   ALTER TABLE ONLY public.t_log
    ADD CONSTRAINT t_log_ibfk_1 FOREIGN KEY (user_eksekusi) REFERENCES public.t_user(username) ON UPDATE CASCADE ON DELETE CASCADE;
 <   ALTER TABLE ONLY public.t_log DROP CONSTRAINT t_log_ibfk_1;
       public          postgres    false    181    179    2785            ?
           2606    441708    t_log t_log_ibfk_2    FK CONSTRAINT     ?   ALTER TABLE ONLY public.t_log
    ADD CONSTRAINT t_log_ibfk_2 FOREIGN KEY (id_produk) REFERENCES public.t_produk(id_produk) ON UPDATE CASCADE ON DELETE CASCADE;
 <   ALTER TABLE ONLY public.t_log DROP CONSTRAINT t_log_ibfk_2;
       public          postgres    false    2783    178    181            ?
           2606    441713    t_produk t_produk_ibfk_1    FK CONSTRAINT     ?   ALTER TABLE ONLY public.t_produk
    ADD CONSTRAINT t_produk_ibfk_1 FOREIGN KEY (id_kategori) REFERENCES public.t_kategori_produk(id_kategori) ON UPDATE CASCADE ON DELETE CASCADE;
 B   ALTER TABLE ONLY public.t_produk DROP CONSTRAINT t_produk_ibfk_1;
       public          postgres    false    2777    174    178            ?
           2606    441718    t_user t_user_ibfk_1    FK CONSTRAINT     ?   ALTER TABLE ONLY public.t_user
    ADD CONSTRAINT t_user_ibfk_1 FOREIGN KEY (id_role) REFERENCES public.t_role(id_role) ON UPDATE CASCADE ON DELETE CASCADE;
 >   ALTER TABLE ONLY public.t_user DROP CONSTRAINT t_user_ibfk_1;
       public          postgres    false    179    176    2779            V   h   x???v
Q???W((M??L?+??N,IM?/ʌ/(?O)?V??L???(?%?&¹?
a?>???
?:
?0QCuMk.O?m?d?u?6E2ژ?F?!m2?? 8mz?      ]   ?   x????j?0 ?{?B??\#;q{????џ]K??b???{?y}?@.??@Us:?P5?O???`;???x????gm?????#[?<?BO 83_M?L?%???a?o?f߯??p??$??ͦ?>b??????~J???u?w?3?J9r?G?g???t?S??Jw/I???\???+?EY??+?re???9fXȵ?33?RT????LϿ??,`??+??y??
2??      Z     x?Œ?k?0???+?M???)s'a
?Sw-?&?Y?&$?`??????D??ӗ?A???^??W?H??+?n'E?\źƂ%/kt?TFh????q?B??
M?:#??]5??e?]?a<?	DF~*/??N鑿H??m???????_?*???R?
???n???:n?^H?wZ*d??R?5w???[u[??/l?<????L{???s??%??&????%?7?ioF?>??W??[????ku$?m?t??)?%?¶x?g7?4,?c?????      X   U   x???v
Q???W((M??L?+?/??IU??L3t?s?LM?0G?P?`C?Ĕ??<uMk.O??0?Q\???2?? ?F*?      [   u   x???v
Q???W((M??L?+?/-N-R? ?y???:
?????E):
?)?E?9@????tM?0G?P?`?Ģ?̼?Lu?????? ?HG?PӚ˓:6??E_dB??? ?==d     