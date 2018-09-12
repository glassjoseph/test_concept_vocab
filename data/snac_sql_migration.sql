DROP SEQUENCE IF EXISTS concept_id_seq CASCADE;
DROP SEQUENCE IF EXISTS concept_properties_id_seq CASCADE;
DROP SEQUENCE IF EXISTS concept_source_id_seq CASCADE;
DROP SEQUENCE IF EXISTS term_id_seq CASCADE;
DROP SEQUENCE IF EXISTS category_id_seq CASCADE;
DROP TABLE IF EXISTS concept CASCADE;
DROP TABLE IF EXISTS concept_properties CASCADE;
DROP TABLE IF EXISTS concept_category CASCADE;
DROP TABLE IF EXISTS concept_source CASCADE;
DROP TABLE IF EXISTS related_concept CASCADE;
DROP TABLE IF EXISTS broader_concept CASCADE;
DROP TABLE IF EXISTS term CASCADE;
DROP TABLE IF EXISTS category CASCADE;
DROP TABLE IF EXISTS concept_lookup CASCADE;

CREATE TABLE concept (id SERIAL PRIMARY KEY,
    deprecated BOOLEAN NOT NULL DEFAULT FALSE
);

CREATE TABLE category (id SERIAL PRIMARY KEY,
    value TEXT NOT NULL,
    description TEXT DEFAULT NULL,
    domain TEXT DEFAULT NULL,
    range TEXT DEFAULT NULL
);

CREATE TABLE term (id SERIAL PRIMARY KEY,
    concept_id INT NOT NULL,
    value TEXT NOT NULL,
    preferred BOOLEAN NOT NULL DEFAULT FALSE,
    FOREIGN KEY (concept_id) REFERENCES concept (id)
);


CREATE TABLE concept_source (id SERIAL PRIMARY KEY,
    concept_id INT NOT NULL,
    citation TEXT DEFAULT NULL,
    url TEXT DEFAULT NULL,
    found_data TEXT DEFAULT NULL,
    note TEXT DEFAULT NULL,
    FOREIGN KEY (concept_id) REFERENCES concept (id)
);

CREATE TABLE concept_category (concept_id INT NOT NULL,
    category_id INT NOT NULL,
    PRIMARY KEY(concept_id, category_id),
    FOREIGN KEY (concept_id) REFERENCES concept (id),
    FOREIGN KEY (category_id) REFERENCES category (id)
);


CREATE TABLE concept_properties (id SERIAL PRIMARY KEY,
    concept_id INT NOT NULL,
    type TEXT NOT NULL,
    value TEXT NOT NULL,
    FOREIGN KEY (concept_id) REFERENCES concept (id)
);

CREATE TABLE broader_concept (narrower_id INT NOT NULL,
    broader_id INT NOT NULL,
    PRIMARY KEY(narrower_id, broader_id),
    FOREIGN KEY (narrower_id) REFERENCES concept (id),
    FOREIGN KEY (broader_id) REFERENCES concept (id)
);


CREATE TABLE related_concept (concept_id INT NOT NULL,
    related_id INT NOT NULL,
    PRIMARY KEY(concept_id, related_id),
    FOREIGN KEY (concept_id) REFERENCES concept (id),
    FOREIGN KEY (related_id) REFERENCES concept (id)
);

CREATE TABLE concept_lookup (old_concept INT NOT NULL,
    new_concept INT NOT NULL,
    PRIMARY KEY(old_concept, new_concept),
    FOREIGN KEY (old_concept) REFERENCES concept (id),
    FOREIGN KEY (new_concept) REFERENCES concept (id)
);

CREATE INDEX term_idx1 ON term (concept_id);
CREATE INDEX concept_source_idx1 ON concept_source (concept_id);
CREATE INDEX concept_category_idx1 ON concept_category (concept_id);
CREATE INDEX concept_category_idx2 ON concept_category (category_id);
CREATE INDEX concept_properties_idx1 ON concept_properties (concept_id);
CREATE INDEX broader_concept_idx1 ON broader_concept (broader_id);
CREATE INDEX broader_concept_idx2 ON broader_concept (narrower_id);
CREATE INDEX related_concept_idx1 ON related_concept (concept_id);

INSERT INTO category (value)
    VALUES ('ethnicity'),
        ('religion'),
        ('nationality'),
        ('occupation');



-- -- for testing compatability with symfony app instance
-- CREATE TABLE concept_concept (concept_target INT NOT NULL,
--     concept_source INT NOT NULL,
--     PRIMARY KEY(concept_target, concept_source),
--     FOREIGN KEY (concept_target) REFERENCES concept (id),
--     FOREIGN KEY (concept_source) REFERENCES concept (id)
-- );


--
--
-- INSERT INTO concept DEFAULT VALUES;
-- INSERT INTO concept DEFAULT VALUES;
-- INSERT INTO concept DEFAULT VALUES;
-- INSERT INTO concept DEFAULT VALUES;
--
-- INSERT INTO term (concept_id, value, preferred)
--     VALUES (1, 'Americans, Afro-', FALSE),
--         (1, 'Americans, African', FALSE),
--         (1, 'Afro-Americans', FALSE),
--         (1, 'African Americans', TRUE),
--         (2, 'Blacks', TRUE),
--         (3, 'Narrower', TRUE),
--         (4, 'Broader', TRUE);
--
-- INSERT INTO related_concept (concept_id, related_id)
-- VALUES(1, 2), (2, 1);
--
-- INSERT INTO broader_concept(narrower_id, broader_id)
--     VALUES (3, 1), (1, 4);
--
--
--
--
--
--
--
--
--
--
--
--
-- -- related_concept - have to insert bidirectional.
--
--
--
--
--
--
-- -- select * from related_concept rc left join concept c on rc.concept_id = c.id left join term t on t.concept_id = c.id;
--
-- SELECT c.id, t.value FROM concept c LEFT JOIN term t ON c.id = t.concept_id and t.preferred = 't';
--
-- SELECT c.id AS id_1, c.deprecated AS deprecated_2, t.id AS id_4, t.value AS value_5, t.preferred AS preferred_6, t.concept_id AS concept_id_7, t8.id AS id_9, t8.type AS type_10, t8.value AS value_11, t8.concept_id AS concept_id_12 FROM concept c LEFT JOIN term t ON t.concept_id = c.id LEFT JOIN concept_properties t8 ON t8.concept_id = c.id WHERE c.id = ?;
--
-- -- Related concepts
-- -- works for a > b, what about b > a?
--  SELECT t0.id AS id_1, t0.deprecated AS deprecated_2, t3.id AS id_4, t3.value AS value_5, t3.preferred AS preferred_6, t3.concept_id AS concept_id_7, t8.id AS id_9, t8.type AS type_10, t8.value AS value_11, t8.concept_id AS concept_id_12 FROM concept t0
--     LEFT JOIN term t3 ON t3.concept_id = t0.id LEFT JOIN concept_properties t8 ON t8.concept_id = t0.id INNER JOIN related_concept ON t0.id = related_concept.related_id WHERE related_concept.concept_id = 1 AND t0.deprecated = 'f';
--
--  SELECT t0.id AS id_1, t0.deprecated AS deprecated_2, t3.id AS id_4, t3.value AS value_5, t3.preferred AS preferred_6, t3.concept_id AS concept_id_7, t8.id AS id_9, t8.type AS type_10, t8.value AS value_11, t8.concept_id AS concept_id_12 FROM concept t0
--     LEFT JOIN term t3 ON t3.concept_id = t0.id LEFT JOIN concept_properties t8 ON t8.concept_id = t0.id INNER JOIN broader_concept ON t0.id = broader_concept.broader_id WHERE broader_concept.narrower_id = ?;
--
-- -- Fix concept_lookup
--  SELECT t0.id AS id_1, t0.deprecated AS deprecated_2, t3.id AS id_4, t3.value AS value_5, t3.preferred AS preferred_6, t3.concept_id AS concept_id_7, t8.id AS id_9, t8.type AS type_10, t8.value AS value_11, t8.concept_id AS concept_id_12 FROM concept t0
--     LEFT JOIN term t3 ON t3.concept_id = t0.id LEFT JOIN concept_properties t8 ON t8.concept_id = t0.id INNER JOIN concept_lookup ON t0.id = concept_lookup.concept_target WHERE concept_lookup.concept_source = ?;
--
--  SELECT t0.id AS id_1, t0.value AS value_2, t0.description AS description_3, t0.domain AS domain_4, t0.range AS range_5 FROM category t0 INNER JOIN concept_category ON t0.id = concept_category.category_id WHERE concept_category.concept_id = ?;
--
--
--
--
--   -- Matched route "concept/3720". Blacks related to African Americans
--   SELECT t0.id AS id_1, t0.deprecated AS deprecated_2, t3.id AS id_4, t3.value AS value_5, t3.preferred AS preferred_6, t3.concept_id AS concept_id_7, t8.id AS id_9, t8.type AS type_10, t8.value AS value_11, t8.concept_id AS concept_id_12 FROM concept t0 LEFT JOIN term t3 ON t3.concept_id = t0.id LEFT JOIN concept_properties t8 ON t8.concept_id = t0.id WHERE t0.id = 1
--   SELECT c.id, t.value FROM concept c LEFT JOIN term t ON c.id = t.concept_id and t.preferred = 't'
--   SELECT t0.id AS id_1, t0.deprecated AS deprecated_2, t3.id AS id_4, t3.value AS value_5, t3.preferred AS preferred_6, t3.concept_id AS concept_id_7, t8.id AS id_9, t8.type AS type_10, t8.value AS value_11, t8.concept_id AS concept_id_12 FROM concept t0 LEFT JOIN term t3 ON t3.concept_id = t0.id LEFT JOIN concept_properties t8 ON t8.concept_id = t0.id INNER JOIN related_concept ON t0.id = related_concept.related_id WHERE related_concept.concept_id = ?
--   SELECT t0.id AS id_1, t0.deprecated AS deprecated_2, t3.id AS id_4, t3.value AS value_5, t3.preferred AS preferred_6, t3.concept_id AS concept_id_7, t8.id AS id_9, t8.type AS type_10, t8.value AS value_11, t8.concept_id AS concept_id_12 FROM concept t0 LEFT JOIN term t3 ON t3.concept_id = t0.id LEFT JOIN concept_properties t8 ON t8.concept_id = t0.id INNER JOIN broader_concept ON t0.id = broader_concept.broader_id WHERE broader_concept.narrower_id = ?
--   -- SELECT t0.id AS id_1, t0.deprecated AS deprecated_2, t3.id AS id_4, t3.value AS value_5, t3.preferred AS preferred_6, t3.concept_id AS concept_id_7, t8.id AS id_9, t8.type AS type_10, t8.value AS value_11, t8.concept_id AS concept_id_12 FROM concept t0 LEFT JOIN term t3 ON t3.concept_id = t0.id LEFT JOIN concept_properties t8 ON t8.concept_id = t0.id INNER JOIN concept_concept ON t0.id = concept_concept.concept_target WHERE concept_concept.concept_source = ?
--   SELECT t0.id AS id_1, t0.value AS value_2, t0.description AS description_3, t0.domain AS domain_4, t0.range AS range_5 FROM category t0 INNER JOIN concept_category ON t0.id = concept_category.category_id WHERE concept_category.concept_id = ?
