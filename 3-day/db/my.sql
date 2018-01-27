/*
    授業メモ
        データベース
            たくさんの出たをルールに基づいて管理したものをテーブルごとに出たを管理する
        テーブル
            エクセルのように列と行で管理する

        SQL
            データベースを操作する言語

        root
            全権を持つ

        -u ユーザー名

        board_db.*to
            board_dbの全てのデータ

*/

-- create database board_db default character set utf8;
    -- create database
        -- create databaseは新しいデータベースを作成する宣言で、宣言の後に作るデータベース名を入力する
    -- default character set utf8
        -- MySQL 文字化けを防ぐ、文字コードの確認と設定


-- grant all privileges on board_db.*to board_user@'localhost' identified by 'board_pass' with grant option;
    -- grant all privileges
        -- なんでもでききる権限を管理
    -- board_user@'localhost'はboard_dbというデータベースだけにアクセすることができ、
    -- with grant option
        -- ユーザーを作成する権限を与える
        -- GRANT権限とは、他のユーザに対して権限を付与することができる権限のこと
        -- このオプションを設定すると他のユーザーに対する権限を設定することができるようになります
        -- 他のユーザーに対してデータベースレベルでのSELECT権限を設定することが可能
    -- identified by
        -- パスワードを設定する


-- select host,user from mysql.user;
    -- host
        -- データベースが稼動しているサーバーのサーバー名
    -- user
        -- ユーザはデータベースオブジェクト(例えばテーブル)を所有しており、これらのオブジェクトについての権限を他のユーザに割り当てて、誰がどのオブジェクトにアクセスできるかを制御できます。


-- use board_db;
    -- use
        -- どのデータベースを使うのかを決める


-- create table board(
--     id int unsigned not null auto_increment primary key,
--     name varchar(255) not null,
--     contents text not null
-- );
    -- create table
        -- データベース内にテーブルを作る宣言でtableの後に名前を決めることができる
    --  フィールド
        -- id name contentsのこと
    --  Type データを入れる型を決める
        -- int varchar text
        -- text 文字制限がない
    -- unsigned
        -- 負の数を無効
    -- not null
        -- nullを禁止する。つまり、何かしらの値を入れる
    -- auto_increment
        -- 整数の値を1ずつ増加して連番させる
    --  primary key
        -- テーブルの中で重複しないためのキーで上で言うとidの番号では同じ番号は存在しないようにするため
        -- 主キーとは、データベースの中から、ある一組のデータセット(レコード)を一意に識別するための情報
        -- 主キーに設定された項目は、複数のレコード間で重複することは許されず、主キーを持たないレコードが存在してもならない。


-- desc board;
    -- テーブルの中身を表示するコマンド

-- insert into board(name, contents)
--     values
--         ('nakata', 'PHP'),
--         ('saitou', 'Java');
    -- insert into
        -- テーブル内にデータをを入れる宣言でinsert intoの後にデータを入れるテーブルを決めnameとcontentsフィールドに値を入力

-- delete from board where id = 1;
    -- delete from board
        -- どのテーブルを削除するのかを決める
    -- board where id = 1
        -- boardテーブルの idフィールドから1のレコードを見つける
