--
-- PostgreSQL database dump
--

-- Dumped from database version 12.5 (Ubuntu 12.5-0ubuntu0.20.10.1)
-- Dumped by pg_dump version 12.5 (Ubuntu 12.5-0ubuntu0.20.10.1)

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
1	2021-01-04 00:53:16	2021-01-04 00:53:16	3	#6462ef	Consequatur labore ad delectus ipsum blanditiis voluptatem consequatur. Incidunt odio delectus corrupti omnis non neque amet est. Quia nemo sit quae quidem eum qui nisi.	Eldon Bashirian Jr.
2	2021-01-04 00:53:16	2021-01-04 00:53:16	2	#1b75b7	At nihil ut accusantium necessitatibus ut. Est molestiae animi quia. Sed inventore pariatur iste corporis cum deleniti. Saepe consequatur sed vel unde consequuntur minima.	Prof. Jeanette Reichert PhD
3	2021-01-04 00:53:16	2021-01-04 00:53:16	2	#2f1741	Exercitationem dolorem est ut quia. Esse molestiae nihil modi quis. Voluptatem itaque nihil voluptas consequuntur. Similique dignissimos est aut non.	Esperanza Hilpert
4	2021-01-04 00:53:16	2021-01-04 00:53:16	1	#a6e1bf	Tenetur rerum in eos voluptas. Cum in dolor blanditiis temporibus sunt. Cupiditate nostrum excepturi sint omnis. Et iure esse error quae deleniti vel nemo.	Mafalda Wisoky
5	2021-01-04 00:53:16	2021-01-04 00:53:16	2	#28a77e	Quibusdam quas earum laboriosam sit molestiae. Ut quis facilis eum quaerat in nesciunt. Aliquid maiores iure dignissimos et est consequatur magnam. Sed velit enim earum ducimus iusto necessitatibus.	Madie Hintz
6	2021-01-04 00:53:16	2021-01-04 00:53:16	2	#933551	Omnis ut aut laudantium deleniti et quia. Quisquam accusantium natus inventore ut quisquam. Ab quis velit modi consequatur animi dolor.	Mr. Clyde Wuckert
7	2021-01-04 00:53:16	2021-01-04 00:53:16	2	#015245	Ut qui perspiciatis omnis. Qui consectetur ipsam nostrum rerum aliquam sunt voluptatem. Veritatis mollitia explicabo aliquid omnis. Perspiciatis ullam cumque officia quis deserunt.	Esther Leffler
8	2021-01-04 00:53:16	2021-01-04 00:53:16	2	#582a49	Molestiae iusto amet laudantium distinctio. Laudantium expedita pariatur omnis est. Numquam architecto neque aut quaerat laborum sequi ut.	Lamont Abernathy
9	2021-01-04 00:53:16	2021-01-04 00:53:16	1	#5f4859	Qui occaecati impedit animi ut non quasi fugiat aut. Dolore voluptate aperiam esse in maxime. Voluptas mollitia voluptas ut tenetur nisi. Qui assumenda voluptatem aut consectetur ipsa.	Lilian Reinger
10	2021-01-04 00:53:16	2021-01-04 00:53:16	3	#6c71b2	Voluptatibus aut quia vitae magnam omnis quasi. Id dignissimos doloremque minima dolores debitis a non. Facere ut ab voluptas.	Grover Kemmer
11	2021-01-04 00:53:16	2021-01-04 00:53:16	1	#99faa0	Repellat quas dolorem consectetur omnis quis a. Autem dolorem omnis aut quod. Autem autem amet dignissimos dolorem. Quas eum rerum est consectetur repellendus id.	Paul Mraz
12	2021-01-04 00:53:16	2021-01-04 00:53:16	1	#62d6a5	Accusamus ipsum voluptas sed nihil. Aut iusto tenetur ipsam eum asperiores tenetur vel facere. Beatae deserunt facilis autem ipsa.	Graciela Ondricka MD
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
1	1	2021-01-04 00:53:24	2021-01-04 00:53:24	Ut tenetur quibusdam id exercitationem fugiat. Voluptatem dolor voluptate aut in voluptas. Vitae voluptates voluptate impedit. Nam voluptas illo soluta.	Steve DuBuque	officia-aut-omnis-aut-modi-qui-et
2	2	2021-01-04 00:53:24	2021-01-04 00:53:24	At ad sed sit sit vel laborum. Id mollitia dolorum eos dolor. Molestias temporibus esse mollitia. Atque et aut autem inventore odio dolores.	Hillary Renner	rerum-et-aliquid-fugit-quod-tempora
3	3	2021-01-04 00:53:24	2021-01-04 00:53:24	Dolores cumque laudantium voluptate. Quae ipsam rerum vero quia est.	Dexter Stanton	possimus-alias-quibusdam-ad-laudantium-eos-rerum-inventore
4	4	2021-01-04 00:53:24	2021-01-04 00:53:24	Dolores consequatur distinctio sint. Rerum est quas vitae ullam ut aliquam.	Una O'Connell	aspernatur-incidunt-maxime-iste-enim
5	5	2021-01-04 00:53:24	2021-01-04 00:53:24	Inventore libero numquam suscipit iste corporis ipsa facere. Ipsa vel est nemo dignissimos sit. Aperiam ad vel cumque quibusdam animi necessitatibus. Enim qui repudiandae rerum commodi rerum eaque repellendus.	Dolores Fisher MD	porro-sint-voluptas-impedit-quia-deserunt
6	6	2021-01-04 00:53:24	2021-01-04 00:53:24	Qui ea accusantium necessitatibus nihil praesentium perferendis ducimus et. Aut placeat ut odit quos.	Kaci Feil	eos-quo-magni-alias-dicta-temporibus-consequuntur-facere
7	7	2021-01-04 00:53:24	2021-01-04 00:53:24	Voluptatem sit sapiente dolores non veritatis. Quasi mollitia omnis rerum debitis. Accusamus dolores autem quia ratione perspiciatis est. Fuga excepturi numquam molestiae repellendus saepe molestias sequi.	Antonina Abshire	harum-et-esse-dolorem-ut-modi-officiis
8	8	2021-01-04 00:53:24	2021-01-04 00:53:24	Sunt tempora ex repellat beatae earum. Provident quis labore error iusto id atque dolor. Qui modi beatae quis culpa dolorem.	Ova Lakin	rerum-corporis-sunt-quia-ullam-numquam
9	9	2021-01-04 00:53:24	2021-01-04 00:53:24	Labore commodi aut dolores est quae hic itaque. Vel eum minima ad non. Architecto recusandae quo inventore. Et aliquam nesciunt sunt et et.	Declan Kris I	a-sed-quia-expedita
10	10	2021-01-04 00:53:24	2021-01-04 00:53:24	Nemo neque nihil quae quis. Velit minima at assumenda ea quisquam. Tempora voluptatem hic non unde. Deleniti molestiae quasi repudiandae corrupti minus fugiat.	Matt Mosciski	consequatur-perferendis-libero-est-quos-labore-dolor-ad
11	11	2021-01-04 00:53:24	2021-01-04 00:53:24	Sed praesentium ipsum eius dicta et autem optio. Et ab quos in. Maiores excepturi autem quas et eum error in. Nisi qui assumenda veritatis maiores ut rerum.	Bernadette Cummerata	deleniti-tempora-vitae-cum-omnis-ut-nobis-id
12	12	2021-01-04 00:53:24	2021-01-04 00:53:24	Tempore facilis et molestias. Facere aut ea quia dolorem saepe error non sed. Aut doloribus quibusdam qui non cum.	Ms. Winnifred Predovic	doloribus-nihil-sequi-voluptatibus-et-dolorum-magnam
\.


--
-- Data for Name: tags; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.tags (id, name, created_at, updated_at) FROM stdin;
1	Summer Mills	2021-01-04 00:53:30	2021-01-04 00:53:30
2	Ada Dooley	2021-01-04 00:53:30	2021-01-04 00:53:30
3	Moshe Medhurst	2021-01-04 00:53:30	2021-01-04 00:53:30
4	Margarette Kreiger	2021-01-04 00:53:30	2021-01-04 00:53:30
5	Ruben Hoppe	2021-01-04 00:53:30	2021-01-04 00:53:30
6	Dr. Lambert Reichert	2021-01-04 00:53:30	2021-01-04 00:53:30
7	Mr. Tito Beer V	2021-01-04 00:53:30	2021-01-04 00:53:30
8	Mr. Gianni Kulas IV	2021-01-04 00:53:30	2021-01-04 00:53:30
9	Harmony Nitzsche III	2021-01-04 00:53:30	2021-01-04 00:53:30
10	Clyde Littel	2021-01-04 00:53:30	2021-01-04 00:53:30
11	Dr. Thomas Bartoletti	2021-01-04 00:53:30	2021-01-04 00:53:30
12	Christiana Cassin	2021-01-04 00:53:30	2021-01-04 00:53:30
\.


--
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.users (id, name, email, email_verified_at, password, remember_token, created_at, updated_at) FROM stdin;
1	Mr. Ezekiel Schumm	elvera.jacobs@example.com	2021-01-04 00:53:24	$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi	jwbfSDNqoC	2021-01-04 00:53:24	2021-01-04 00:53:24
2	Louie Bailey	rosenbaum.glenda@example.com	2021-01-04 00:53:24	$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi	HgWc466wKK	2021-01-04 00:53:24	2021-01-04 00:53:24
3	Freida Stark II	efeil@example.org	2021-01-04 00:53:24	$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi	vhmzl6SgX4	2021-01-04 00:53:24	2021-01-04 00:53:24
4	Kelsi Hermann MD	berge.laila@example.net	2021-01-04 00:53:24	$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi	5bOTaKoXZB	2021-01-04 00:53:24	2021-01-04 00:53:24
5	Mr. Lucious Kozey III	nathanael86@example.com	2021-01-04 00:53:24	$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi	6WiptrSWT7	2021-01-04 00:53:24	2021-01-04 00:53:24
6	Mrs. Alisa Mraz MD	dorothy63@example.org	2021-01-04 00:53:24	$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi	v2zLgm1XuE	2021-01-04 00:53:24	2021-01-04 00:53:24
7	Rhianna Smitham	cyril42@example.net	2021-01-04 00:53:24	$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi	R7PKYjfhA3	2021-01-04 00:53:24	2021-01-04 00:53:24
8	Bryon Hand	einar.tillman@example.net	2021-01-04 00:53:24	$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi	4bQgVGvbl2	2021-01-04 00:53:24	2021-01-04 00:53:24
9	Mr. Cicero Leannon	milan.cormier@example.org	2021-01-04 00:53:24	$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi	yApNRZy1p4	2021-01-04 00:53:24	2021-01-04 00:53:24
10	Coleman Schmeler	weimann.francisco@example.net	2021-01-04 00:53:24	$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi	idubRnDRGH	2021-01-04 00:53:24	2021-01-04 00:53:24
11	Allene Harris	garnet52@example.net	2021-01-04 00:53:24	$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi	glPWYmLN5v	2021-01-04 00:53:24	2021-01-04 00:53:24
12	Sasha Nicolas MD	agustin.dach@example.org	2021-01-04 00:53:24	$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi	zAknGsX6wO	2021-01-04 00:53:24	2021-01-04 00:53:24
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
-- PostgreSQL database dump complete
--


