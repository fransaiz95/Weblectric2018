SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
TRUNCATE TABLE weblectric.rangedemands;
TRUNCATE TABLE weblectric.rangemeteos;
TRUNCATE TABLE weblectric.rangerenewables;
TRUNCATE TABLE weblectric.arcs_typelines;
TRUNCATE TABLE weblectric.fuels_technologies;
TRUNCATE TABLE weblectric.regions_technologies;
TRUNCATE TABLE weblectric.regions;
TRUNCATE TABLE weblectric.countries;
TRUNCATE TABLE weblectric.arcs;
TRUNCATE TABLE weblectric.fuels;
TRUNCATE TABLE weblectric.technologies;
TRUNCATE TABLE weblectric.typelines;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;