PGDMP                          |            prueba_tecnica    15.5    15.5     �           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            �           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            �           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            �           1262    80286    prueba_tecnica    DATABASE     �   CREATE DATABASE prueba_tecnica WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE_PROVIDER = libc LOCALE = 'Spanish_Colombia.1252';
    DROP DATABASE prueba_tecnica;
                postgres    false            �            1259    80287    usuarios    TABLE     �   CREATE TABLE public.usuarios (
    cedula character varying,
    nombres character varying,
    apellidos character varying,
    telefono character varying,
    correo character varying,
    ciudad character varying
);
    DROP TABLE public.usuarios;
       public         heap    postgres    false            �          0    80287    usuarios 
   TABLE DATA           X   COPY public.usuarios (cedula, nombres, apellidos, telefono, correo, ciudad) FROM stdin;
    public          postgres    false    214   �       �   �   x�e��n�0Dg�+��H�
�55-
d�؅H�@�,�=�__*�`��ݽ#��;$�ϋ�n�1��LsL��qOl�\���u��v�2�)uC�5���_�CEk*<��%�艬���[F7���41�g$����u�I�����&�Cu,����c�Ƕ���N�FL���,i�Uq[�^�F�s��lm~���%˗|K6�Z5��S�a��Jv�1���U��oK��y�c~u�n�     