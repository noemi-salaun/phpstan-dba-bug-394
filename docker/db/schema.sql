CREATE TABLE `my_table`
(
    `id`   int(10)     NOT NULL,
    `name` varchar(64) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8;

INSERT INTO `my_table` (id, name)
VALUES (1, 'Test');
