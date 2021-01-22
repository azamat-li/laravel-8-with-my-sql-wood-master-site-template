--
-- PostgreSQL database dump
--

-- Dumped from database version 12.4
-- Dumped by pg_dump version 13.1

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

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- Name: adress_labels; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.adress_labels (
    id bigint NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.adress_labels OWNER TO postgres;

--
-- Name: adress_labels_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.adress_labels_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.adress_labels_id_seq OWNER TO postgres;

--
-- Name: adress_labels_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.adress_labels_id_seq OWNED BY public.adress_labels.id;


--
-- Name: careers; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.careers (
    id bigint NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    description text NOT NULL,
    field character varying(255) NOT NULL,
    name character varying(255) NOT NULL
);


ALTER TABLE public.careers OWNER TO postgres;

--
-- Name: careers_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.careers_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.careers_id_seq OWNER TO postgres;

--
-- Name: careers_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.careers_id_seq OWNED BY public.careers.id;


--
-- Name: client_tag; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.client_tag (
    id bigint NOT NULL,
    client_id bigint NOT NULL,
    tag_id bigint NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.client_tag OWNER TO postgres;

--
-- Name: client_tag_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.client_tag_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.client_tag_id_seq OWNER TO postgres;

--
-- Name: client_tag_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.client_tag_id_seq OWNED BY public.client_tag.id;


--
-- Name: clients; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.clients (
    id bigint NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    tag_id character varying(255),
    color character varying(255),
    about text NOT NULL,
    name character varying(255) NOT NULL
);


ALTER TABLE public.clients OWNER TO postgres;

--
-- Name: clients_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.clients_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.clients_id_seq OWNER TO postgres;

--
-- Name: clients_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.clients_id_seq OWNED BY public.clients.id;


--
-- Name: colors; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.colors (
    color character varying(255) NOT NULL,
    id bigint NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.colors OWNER TO postgres;

--
-- Name: colors_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.colors_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.colors_id_seq OWNER TO postgres;

--
-- Name: colors_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.colors_id_seq OWNED BY public.colors.id;


--
-- Name: failed_jobs; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.failed_jobs (
    id bigint NOT NULL,
    uuid character varying(255) NOT NULL,
    connection text NOT NULL,
    queue text NOT NULL,
    payload text NOT NULL,
    exception text NOT NULL,
    failed_at timestamp(0) without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL
);


ALTER TABLE public.failed_jobs OWNER TO postgres;

--
-- Name: failed_jobs_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.failed_jobs_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.failed_jobs_id_seq OWNER TO postgres;

--
-- Name: failed_jobs_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.failed_jobs_id_seq OWNED BY public.failed_jobs.id;


--
-- Name: feedback; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.feedback (
    id bigint NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    message text NOT NULL,
    email character varying(255) NOT NULL
);


ALTER TABLE public.feedback OWNER TO postgres;

--
-- Name: feedback_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.feedback_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.feedback_id_seq OWNER TO postgres;

--
-- Name: feedback_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.feedback_id_seq OWNED BY public.feedback.id;


--
-- Name: fonts; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.fonts (
    id bigint NOT NULL,
    name character varying(255) NOT NULL,
    weight integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.fonts OWNER TO postgres;

--
-- Name: fonts_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.fonts_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.fonts_id_seq OWNER TO postgres;

--
-- Name: fonts_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.fonts_id_seq OWNED BY public.fonts.id;


--
-- Name: migrations; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.migrations (
    id integer NOT NULL,
    migration character varying(255) NOT NULL,
    batch integer NOT NULL
);


ALTER TABLE public.migrations OWNER TO postgres;

--
-- Name: migrations_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.migrations_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.migrations_id_seq OWNER TO postgres;

--
-- Name: migrations_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.migrations_id_seq OWNED BY public.migrations.id;


--
-- Name: password_resets; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.password_resets (
    email character varying(255) NOT NULL,
    token character varying(255) NOT NULL,
    created_at timestamp(0) without time zone
);


ALTER TABLE public.password_resets OWNER TO postgres;

--
-- Name: product_tag; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.product_tag (
    id bigint NOT NULL,
    product_id bigint NOT NULL,
    tag_id bigint NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.product_tag OWNER TO postgres;

--
-- Name: product_tag_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.product_tag_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.product_tag_id_seq OWNER TO postgres;

--
-- Name: product_tag_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.product_tag_id_seq OWNED BY public.product_tag.id;


--
-- Name: products; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.products (
    id bigint NOT NULL,
    user_id bigint NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    description text NOT NULL,
    name character varying(255) NOT NULL,
    slug character varying(255) NOT NULL
);


ALTER TABLE public.products OWNER TO postgres;

--
-- Name: products_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.products_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.products_id_seq OWNER TO postgres;

--
-- Name: products_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.products_id_seq OWNED BY public.products.id;


--
-- Name: tags; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.tags (
    id bigint NOT NULL,
    name character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.tags OWNER TO postgres;

--
-- Name: tags_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.tags_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tags_id_seq OWNER TO postgres;

--
-- Name: tags_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.tags_id_seq OWNED BY public.tags.id;


--
-- Name: users; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.users (
    id bigint NOT NULL,
    name character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    email_verified_at timestamp(0) without time zone,
    password character varying(255) NOT NULL,
    remember_token character varying(100),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.users OWNER TO postgres;

--
-- Name: users_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.users_id_seq OWNER TO postgres;

--
-- Name: users_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.users_id_seq OWNED BY public.users.id;


--
-- Name: adress_labels id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.adress_labels ALTER COLUMN id SET DEFAULT nextval('public.adress_labels_id_seq'::regclass);


--
-- Name: careers id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.careers ALTER COLUMN id SET DEFAULT nextval('public.careers_id_seq'::regclass);


--
-- Name: client_tag id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.client_tag ALTER COLUMN id SET DEFAULT nextval('public.client_tag_id_seq'::regclass);


--
-- Name: clients id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.clients ALTER COLUMN id SET DEFAULT nextval('public.clients_id_seq'::regclass);


--
-- Name: colors id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.colors ALTER COLUMN id SET DEFAULT nextval('public.colors_id_seq'::regclass);


--
-- Name: failed_jobs id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.failed_jobs ALTER COLUMN id SET DEFAULT nextval('public.failed_jobs_id_seq'::regclass);


--
-- Name: feedback id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.feedback ALTER COLUMN id SET DEFAULT nextval('public.feedback_id_seq'::regclass);


--
-- Name: fonts id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.fonts ALTER COLUMN id SET DEFAULT nextval('public.fonts_id_seq'::regclass);


--
-- Name: migrations id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.migrations ALTER COLUMN id SET DEFAULT nextval('public.migrations_id_seq'::regclass);


--
-- Name: product_tag id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.product_tag ALTER COLUMN id SET DEFAULT nextval('public.product_tag_id_seq'::regclass);


--
-- Name: products id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.products ALTER COLUMN id SET DEFAULT nextval('public.products_id_seq'::regclass);


--
-- Name: tags id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.tags ALTER COLUMN id SET DEFAULT nextval('public.tags_id_seq'::regclass);


--
-- Name: users id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public.users_id_seq'::regclass);


--
-- Data for Name: adress_labels; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.adress_labels (id, created_at, updated_at) FROM stdin;
\.


--
-- Data for Name: careers; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.careers (id, created_at, updated_at, description, field, name) FROM stdin;
1	2021-01-02 05:44:42	2021-01-02 05:44:42	Voluptate qui id non mollitia iste. Eaque voluptatem reprehenderit vel omnis quia officia voluptatem. Impedit earum asperiores magnam natus.	et	Neva Schinner
2	2021-01-02 05:44:42	2021-01-02 05:44:42	Iusto aut sit magni. Quaerat iusto cumque quis tempore sunt illo modi reiciendis. Tenetur mollitia deserunt ut cum est sequi beatae. Mollitia et debitis hic est iusto vel nemo.	consequatur	Elroy Ryan
3	2021-01-02 05:44:42	2021-01-02 05:44:42	Similique architecto praesentium quasi nemo quibusdam aut. Non consequatur veritatis ducimus omnis laboriosam. Reprehenderit voluptatum ut tempore vitae. In qui ea nemo et.	temporibus	Dessie Fadel
4	2021-01-02 05:44:42	2021-01-02 05:44:42	Adipisci quisquam fuga maiores et. Commodi laboriosam saepe omnis eos. Itaque consequatur velit et quia.	inventore	Miss Yvette Murazik
5	2021-01-02 05:44:42	2021-01-02 05:44:42	Et assumenda quidem qui. Aliquam quod voluptas qui excepturi veniam nulla.	dolorem	Dr. Samson Ritchie Sr.
6	2021-01-02 05:44:42	2021-01-02 05:44:42	Ut dolor quia perspiciatis enim. Eligendi voluptatem animi voluptatum consequatur in ut ex. Nesciunt dolorum sed aut. Repellat iure voluptatibus fugiat repellendus impedit sint perspiciatis.	doloribus	Noelia Schamberger
7	2021-01-02 05:44:42	2021-01-02 05:44:42	Saepe debitis accusantium ea illum numquam deleniti odio. Qui enim ipsam id necessitatibus doloribus ipsam perspiciatis labore. Laudantium vero illum ea alias inventore explicabo.	ut	Prof. Mya Shanahan
8	2021-01-02 05:44:42	2021-01-02 05:44:42	Vero molestias qui nisi sit repellat. Ut rerum id alias eveniet. Saepe mollitia ab eveniet ut est voluptatum asperiores. Dolores nemo est et placeat tempora.	ipsum	Jose Blick
9	2021-01-02 05:44:42	2021-01-02 05:44:42	Incidunt autem occaecati unde sint et animi. Corporis aut aut debitis voluptate. Corporis delectus sunt accusamus voluptatem modi ullam voluptate.	sunt	Alford Olson
10	2021-01-02 05:44:42	2021-01-02 05:44:42	Nam corporis est sed voluptate in. Facilis modi ad quod expedita vel amet. Dolore consectetur perferendis amet voluptatem. At architecto voluptatibus est sed aut. Nesciunt odio nemo quia deleniti ullam rerum in.	id	Hilbert Sipes
11	2021-01-02 05:44:42	2021-01-02 05:44:42	Nam fugiat vel voluptas iure ex quia nostrum et. Quibusdam a aspernatur voluptatem. Voluptas eum quasi commodi architecto expedita et repellat.	accusantium	Hector Hill
12	2021-01-02 05:44:42	2021-01-02 05:44:42	Cupiditate maiores consequatur autem provident sapiente temporibus error. Non odio quia soluta. Explicabo fugit esse unde eum at dolor. Voluptatem deserunt cumque repellendus veniam vitae inventore accusamus assumenda.	veritatis	Lavina Mosciski
13	2021-01-02 05:44:42	2021-01-02 05:44:42	Eos est eaque odit nisi qui qui. Rerum et maiores quo aut labore illo. Dolorum corporis magnam aperiam deserunt ut numquam ullam. Cumque sint quia recusandae omnis.	vitae	Antonietta Stark
14	2021-01-02 05:44:42	2021-01-02 05:44:42	Corrupti repellat cumque sed nemo quis autem. Vitae unde est quaerat culpa sapiente voluptatem. Natus quod similique ut voluptatem.	quo	Gwendolyn Luettgen
15	2021-01-02 05:44:42	2021-01-02 05:44:42	Ut reprehenderit sunt aut suscipit. Quia reiciendis et dolor animi reprehenderit. Eos sed et aut ullam alias. Voluptatibus nemo eos atque praesentium odio sapiente vel dolore.	necessitatibus	Prof. Alejandrin Prosacco PhD
16	2021-01-02 05:44:42	2021-01-02 05:44:42	Iste et aperiam a explicabo temporibus occaecati nihil eum. Et neque autem enim odit molestiae. Rem sit tenetur minus tempore. Odio itaque cupiditate quis ut.	enim	Austyn Shanahan MD
\.


--
-- Data for Name: client_tag; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.client_tag (id, client_id, tag_id, created_at, updated_at) FROM stdin;
\.


--
-- Data for Name: clients; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.clients (id, created_at, updated_at, tag_id, color, about, name) FROM stdin;
1	2021-01-02 05:44:12	2021-01-02 05:44:12	1	#ff84ba	Sed excepturi quidem ipsa vel. Corrupti debitis qui accusamus quis eveniet velit saepe. Est voluptates quaerat quo exercitationem.	Sammie Stanton Jr.
2	2021-01-02 05:44:12	2021-01-02 05:44:12	2	#ec6e62	Et non eaque nemo quia ipsam dolor. Eum illum sit quos et molestias. Explicabo autem minima ipsum incidunt numquam. Voluptas fugiat fugit et rerum. Et asperiores necessitatibus ut quod.	Camryn Turcotte DDS
3	2021-01-02 05:44:12	2021-01-02 05:44:12	3	#b42760	Illum id deserunt voluptatem consectetur eligendi. Omnis sapiente recusandae corporis dolor est nihil. Rerum eius aut voluptate porro.	Miss Samanta Rempel
4	2021-01-02 05:44:12	2021-01-02 05:44:12	1	#409837	Impedit soluta pariatur velit adipisci sed et placeat. Illo nisi iste est magnam sequi aspernatur id. Quidem sed eum omnis optio voluptas labore. Sed vitae eveniet et.	Prof. Cora Shields DVM
5	2021-01-02 05:44:12	2021-01-02 05:44:12	2	#c4fc41	Rerum aut ut reiciendis deserunt sit. Pariatur et est mollitia ex laboriosam omnis dolorum rerum.	Prof. Elijah O'Hara
6	2021-01-02 05:44:12	2021-01-02 05:44:12	3	#f9cee3	Vitae dolor amet itaque omnis et consequatur. Libero aliquam consequatur aut. Voluptate inventore aliquid voluptates quis placeat corrupti culpa.	Leone Emard
7	2021-01-02 05:44:12	2021-01-02 05:44:12	1	#9a9b7c	Nostrum laudantium repellendus perspiciatis praesentium. Sed ut rerum quos aperiam quis qui optio. Provident fuga saepe dolorem saepe ea.	Alanis Rosenbaum
8	2021-01-02 05:44:12	2021-01-02 05:44:12	2	#c974a5	Ipsa sunt nihil eum corporis. Ex aut explicabo provident cum architecto dolorem corrupti. Ducimus velit quibusdam maxime.	Prof. Cesar Smith Jr.
9	2021-01-02 05:44:12	2021-01-02 05:44:12	1	#8c2cb8	Quis rerum deserunt debitis magni. Iusto ut tempore eos et rerum voluptatem. Mollitia et officia eligendi quis alias ipsam. Recusandae et et voluptatem facere ducimus.	Lew Reichert
10	2021-01-02 05:44:12	2021-01-02 05:44:12	3	#db6e4a	Consequatur ea perspiciatis ab odit quisquam saepe. Quia voluptates esse et recusandae. Ratione sed dicta quae.	Reginald Gulgowski
11	2021-01-02 05:44:12	2021-01-02 05:44:12	2	#d0587d	Et minus omnis unde quis voluptas odio. Porro molestiae mollitia cum dolores aut consequatur. Tenetur cumque quia enim quia magni facilis.	Meaghan Anderson
12	2021-01-02 05:44:12	2021-01-02 05:44:12	1	#9d96de	Explicabo ullam enim aut id. Hic quia distinctio expedita. Illo corporis voluptatem laboriosam quis.	Leopoldo Koss
\.


--
-- Data for Name: colors; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.colors (color, id, created_at, updated_at) FROM stdin;
\.


--
-- Data for Name: failed_jobs; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.failed_jobs (id, uuid, connection, queue, payload, exception, failed_at) FROM stdin;
\.


--
-- Data for Name: feedback; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.feedback (id, created_at, updated_at, message, email) FROM stdin;
\.


--
-- Data for Name: fonts; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.fonts (id, name, weight, created_at, updated_at) FROM stdin;
\.


--
-- Data for Name: migrations; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.migrations (id, migration, batch) FROM stdin;
1	2014_10_12_000000_create_users_table	1
2	2014_10_12_100000_create_password_resets_table	1
3	2019_08_19_000000_create_failed_jobs_table	1
4	2020_11_17_133824_create_clients_table	1
5	2020_11_17_163337_create_products_table	1
6	2020_11_22_165444_create_tags_table	1
7	2020_11_27_155212_create_careers_table	1
8	2020_11_28_072940_create_colors_table	1
9	2020_12_02_063657_create_adress_labels_table	1
10	2020_12_04_163837_create_fonts_table	1
11	2020_12_24_003613_create_feedback_table	1
\.


--
-- Data for Name: password_resets; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.password_resets (email, token, created_at) FROM stdin;
\.


--
-- Data for Name: product_tag; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.product_tag (id, product_id, tag_id, created_at, updated_at) FROM stdin;
\.


--
-- Data for Name: products; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.products (id, user_id, created_at, updated_at, description, name, slug) FROM stdin;
1	1	2021-01-02 05:44:25	2021-01-02 05:44:25	Qui soluta voluptatem illum iste aperiam tempora. Est odio nemo earum consequatur pariatur et qui rerum. Sint sint placeat iusto nulla voluptatum. Deserunt velit reprehenderit et est commodi quis est.	Dr. Hazel Botsford	labore-fugit-facere-et-enim-aut-iure-et
2	2	2021-01-02 05:44:25	2021-01-02 05:44:25	Asperiores et eum ad ipsam sit consectetur quas. Vel cupiditate neque quam id quod odio. Voluptatem odio pariatur velit fugiat magnam. Vero optio ut dignissimos perspiciatis dolorum quia commodi. Laborum aliquid laboriosam qui quae sit quo dolores.	Mathew Waters	vitae-voluptas-autem-recusandae-molestiae-quia-est-vel-tempore
3	3	2021-01-02 05:44:25	2021-01-02 05:44:25	Ut officia quia veritatis laborum voluptatum. Id fugit corporis exercitationem necessitatibus ut aperiam. Accusamus quae magni aut cumque minus quos maxime.	Stewart Schiller	sequi-fugit-itaque-eos-fugit-illum-officia-quo-nostrum
4	4	2021-01-02 05:44:25	2021-01-02 05:44:25	Et odit odit non quasi sunt dolor distinctio. Est fuga libero aut. Reiciendis sed quia aut minus tempore.	Robb Douglas	ullam-et-unde-numquam-dolor
5	5	2021-01-02 05:44:25	2021-01-02 05:44:25	Quidem provident optio voluptas tempora adipisci. Aliquam laudantium rem sunt dolorum cum a sit.	Missouri Altenwerth Sr.	laudantium-eum-itaque-optio-autem-ipsam-cum
6	6	2021-01-02 05:44:25	2021-01-02 05:44:25	Sunt quae tempora adipisci odio occaecati. Ullam maxime expedita ut id exercitationem quidem dolorum. Quae cum quo consequatur quo. Harum est ut asperiores quo. Qui nemo rem consequatur dolor.	Austyn Goodwin DDS	non-enim-facilis-ad-debitis-porro
7	7	2021-01-02 05:44:25	2021-01-02 05:44:25	Velit aut commodi et quas. Reprehenderit est aspernatur aspernatur rerum praesentium omnis nihil. Nesciunt quidem officia ipsum.	Dr. Emil Harvey V	dolorem-est-voluptatum-magni-enim-quas-porro-atque-consectetur
8	8	2021-01-02 05:44:25	2021-01-02 05:44:25	Omnis nisi consequatur cupiditate illum praesentium officia sint. Iusto atque dolores ullam possimus laborum culpa labore. Harum minima nobis molestiae quibusdam.	Price Schaefer	ut-eum-nam-est
9	9	2021-01-02 05:44:25	2021-01-02 05:44:25	Id sapiente iusto corporis iusto. Eaque animi odit esse facilis ut aspernatur qui voluptatem. In quaerat iure qui recusandae.	Prof. Lula Feeney Sr.	occaecati-nesciunt-occaecati-sint-error
10	10	2021-01-02 05:44:25	2021-01-02 05:44:25	Reprehenderit rerum reiciendis quae optio non optio deserunt. Illum in cum dolores modi non molestiae. Consequatur ratione quis autem enim laboriosam blanditiis aliquam.	Tyra Bartell	aut-molestiae-est-architecto-iste-voluptas-ipsum-reprehenderit-suscipit
11	11	2021-01-02 05:44:25	2021-01-02 05:44:25	Reprehenderit quos suscipit nostrum modi veniam et at. Ut laboriosam qui consequatur enim. Et non ut nobis. Omnis similique quia in nam. Nihil aperiam et repudiandae dolorem cumque rem.	Prof. Colt Dare DVM	qui-aut-laborum-corporis-modi-ut-officia-delectus
12	12	2021-01-02 05:44:25	2021-01-02 05:44:25	Sit ut in voluptas similique qui repellendus. Saepe molestias soluta animi vel ad. Et nesciunt earum atque natus nam. Aperiam autem dignissimos necessitatibus modi neque est.	Mrs. Pattie Johns Jr.	nemo-quisquam-harum-qui-nemo
13	13	2021-01-02 05:44:25	2021-01-02 05:44:25	Consequuntur iusto tempora eos in soluta ut. Aut at velit ab et. Hic cupiditate voluptas nobis eius et totam esse.	Janice Wehner	nesciunt-fugiat-aut-quibusdam-enim
14	14	2021-01-02 05:44:25	2021-01-02 05:44:25	Tempora neque eius voluptatum est dolor natus labore. Impedit laudantium laborum modi veniam praesentium. Occaecati molestiae beatae rem ut officiis. Ratione rerum accusamus adipisci est modi repellendus impedit.	Garret Willms	esse-qui-ipsum-consequatur-numquam-quasi
15	15	2021-01-02 05:44:25	2021-01-02 05:44:25	Eaque rerum reiciendis non. Dolor ullam dicta dicta.	River Rosenbaum	quis-non-est-nulla-quas-qui-vel
16	16	2021-01-02 05:44:25	2021-01-02 05:44:25	Nihil quos ab quia nisi omnis ab est. Ut vitae voluptatem corrupti tempore consequatur. Enim et optio rerum amet cupiditate amet unde. Hic sit qui commodi aspernatur optio et.	Mittie Olson MD	ab-blanditiis-et-nulla-cupiditate-est-sint
\.


--
-- Data for Name: tags; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.tags (id, name, created_at, updated_at) FROM stdin;
1	Francesco Harris	2021-01-02 05:45:05	2021-01-02 05:45:05
2	Rigoberto Mueller	2021-01-02 05:45:05	2021-01-02 05:45:05
3	Connie Harber Sr.	2021-01-02 05:45:05	2021-01-02 05:45:05
4	Prof. Vincenzo Rohan DVM	2021-01-02 05:45:05	2021-01-02 05:45:05
5	Anya Mosciski	2021-01-02 05:45:05	2021-01-02 05:45:05
6	Mr. Olin Emard IV	2021-01-02 05:45:05	2021-01-02 05:45:05
7	Monty Adams	2021-01-02 05:45:05	2021-01-02 05:45:05
8	Ms. Dortha Lakin	2021-01-02 05:45:05	2021-01-02 05:45:05
9	Ms. Guadalupe Carter Sr.	2021-01-02 05:45:05	2021-01-02 05:45:05
\.


--
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.users (id, name, email, email_verified_at, password, remember_token, created_at, updated_at) FROM stdin;
1	Peggie Reilly V	stephen.witting@example.org	2021-01-02 05:44:25	$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi	ig5cGe5Xbt	2021-01-02 05:44:25	2021-01-02 05:44:25
2	Viviane Cole	brant.bins@example.com	2021-01-02 05:44:25	$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi	uy2uW4U15N	2021-01-02 05:44:25	2021-01-02 05:44:25
3	Bobby Hermiston	eunice.stark@example.net	2021-01-02 05:44:25	$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi	1svcfWIm4v	2021-01-02 05:44:25	2021-01-02 05:44:25
4	Tobin D'Amore	jannie.rutherford@example.org	2021-01-02 05:44:25	$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi	7r0sCeb9Zf	2021-01-02 05:44:25	2021-01-02 05:44:25
5	Georgiana Shanahan III	faye25@example.org	2021-01-02 05:44:25	$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi	B1dGyipCh2	2021-01-02 05:44:25	2021-01-02 05:44:25
6	Zelda Carter	malachi74@example.org	2021-01-02 05:44:25	$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi	4Jq6grVbe9	2021-01-02 05:44:25	2021-01-02 05:44:25
7	Luciano Koss DDS	woberbrunner@example.com	2021-01-02 05:44:25	$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi	as4o6TFUCS	2021-01-02 05:44:25	2021-01-02 05:44:25
8	Heloise Homenick	bartoletti.ayla@example.net	2021-01-02 05:44:25	$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi	Pz2YkajD9P	2021-01-02 05:44:25	2021-01-02 05:44:25
9	Kyla Mertz PhD	angelita.deckow@example.org	2021-01-02 05:44:25	$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi	laRB0chrM5	2021-01-02 05:44:25	2021-01-02 05:44:25
10	Angel Ward	iva83@example.org	2021-01-02 05:44:25	$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi	Fv2Gq1nfoD	2021-01-02 05:44:25	2021-01-02 05:44:25
11	Jamie Schmeler	mraz.lourdes@example.org	2021-01-02 05:44:25	$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi	Sd8bTn93ac	2021-01-02 05:44:25	2021-01-02 05:44:25
12	Prof. Javier Christiansen DVM	ian.bartoletti@example.com	2021-01-02 05:44:25	$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi	ZaMCsnbdEF	2021-01-02 05:44:25	2021-01-02 05:44:25
13	Clark Hagenes	agnes72@example.org	2021-01-02 05:44:25	$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi	GZ8xLPgMSL	2021-01-02 05:44:25	2021-01-02 05:44:25
14	Janessa Lindgren	ojakubowski@example.org	2021-01-02 05:44:25	$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi	ecOjGGePGX	2021-01-02 05:44:25	2021-01-02 05:44:25
15	Susana Gerlach Jr.	lueilwitz.max@example.com	2021-01-02 05:44:25	$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi	FBGHgzY5cn	2021-01-02 05:44:25	2021-01-02 05:44:25
16	Johnny Tremblay	nrippin@example.com	2021-01-02 05:44:25	$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi	Du7T5P9jFH	2021-01-02 05:44:25	2021-01-02 05:44:25
\.


--
-- Name: adress_labels_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.adress_labels_id_seq', 1, false);


--
-- Name: careers_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.careers_id_seq', 1, false);


--
-- Name: client_tag_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.client_tag_id_seq', 1, false);


--
-- Name: clients_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.clients_id_seq', 12, true);


--
-- Name: colors_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.colors_id_seq', 1, false);


--
-- Name: failed_jobs_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.failed_jobs_id_seq', 1, false);


--
-- Name: feedback_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.feedback_id_seq', 1, false);


--
-- Name: fonts_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.fonts_id_seq', 1, false);


--
-- Name: migrations_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.migrations_id_seq', 11, true);


--
-- Name: product_tag_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.product_tag_id_seq', 1, false);


--
-- Name: products_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.products_id_seq', 12, true);


--
-- Name: tags_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.tags_id_seq', 12, true);


--
-- Name: users_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.users_id_seq', 12, true);


--
-- Name: adress_labels adress_labels_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.adress_labels
    ADD CONSTRAINT adress_labels_pkey PRIMARY KEY (id);


--
-- Name: careers careers_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.careers
    ADD CONSTRAINT careers_pkey PRIMARY KEY (id);


--
-- Name: client_tag client_tag_client_id_tag_id_unique; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.client_tag
    ADD CONSTRAINT client_tag_client_id_tag_id_unique UNIQUE (client_id, tag_id);


--
-- Name: client_tag client_tag_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.client_tag
    ADD CONSTRAINT client_tag_pkey PRIMARY KEY (id);


--
-- Name: clients clients_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.clients
    ADD CONSTRAINT clients_pkey PRIMARY KEY (id);


--
-- Name: colors colors_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.colors
    ADD CONSTRAINT colors_pkey PRIMARY KEY (id);


--
-- Name: failed_jobs failed_jobs_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.failed_jobs
    ADD CONSTRAINT failed_jobs_pkey PRIMARY KEY (id);


--
-- Name: failed_jobs failed_jobs_uuid_unique; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.failed_jobs
    ADD CONSTRAINT failed_jobs_uuid_unique UNIQUE (uuid);


--
-- Name: feedback feedback_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.feedback
    ADD CONSTRAINT feedback_pkey PRIMARY KEY (id);


--
-- Name: fonts fonts_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.fonts
    ADD CONSTRAINT fonts_pkey PRIMARY KEY (id);


--
-- Name: migrations migrations_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.migrations
    ADD CONSTRAINT migrations_pkey PRIMARY KEY (id);


--
-- Name: product_tag product_tag_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.product_tag
    ADD CONSTRAINT product_tag_pkey PRIMARY KEY (id);


--
-- Name: product_tag product_tag_product_id_tag_id_unique; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.product_tag
    ADD CONSTRAINT product_tag_product_id_tag_id_unique UNIQUE (product_id, tag_id);


--
-- Name: products products_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.products
    ADD CONSTRAINT products_pkey PRIMARY KEY (id);


--
-- Name: tags tags_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.tags
    ADD CONSTRAINT tags_pkey PRIMARY KEY (id);


--
-- Name: users users_email_unique; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_email_unique UNIQUE (email);


--
-- Name: users users_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);


--
-- Name: password_resets_email_index; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX password_resets_email_index ON public.password_resets USING btree (email);


--
-- Name: client_tag client_tag_client_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.client_tag
    ADD CONSTRAINT client_tag_client_id_foreign FOREIGN KEY (client_id) REFERENCES public.clients(id) ON DELETE CASCADE;


--
-- Name: client_tag client_tag_tag_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.client_tag
    ADD CONSTRAINT client_tag_tag_id_foreign FOREIGN KEY (tag_id) REFERENCES public.tags(id) ON DELETE CASCADE;


--
-- Name: product_tag product_tag_product_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.product_tag
    ADD CONSTRAINT product_tag_product_id_foreign FOREIGN KEY (product_id) REFERENCES public.products(id);


--
-- Name: product_tag product_tag_tag_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.product_tag
    ADD CONSTRAINT product_tag_tag_id_foreign FOREIGN KEY (tag_id) REFERENCES public.tags(id);


--
-- Name: products products_user_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.products
    ADD CONSTRAINT products_user_id_foreign FOREIGN KEY (user_id) REFERENCES public.users(id) ON DELETE CASCADE;


--
-- Name: SCHEMA public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM rdsadmin;
REVOKE ALL ON SCHEMA public FROM PUBLIC;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- PostgreSQL database dump complete
--

