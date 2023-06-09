<?php

/**
 * This dictionary is used to map the table read from the xml file to the table in the database
 * If a table is split by a comma, it means that the table is split in two tables in the database
 *
 * @package utils
 *
 */
return [
  'Museo' => 'punto_di_interesse, info_museo',
  'Fermata_bus' => 'punto_di_interesse, info_fermata',
  'coordinata' => 'coordinata',
  'Percorso_escursionistico' => 'percorso_escursionistico',
  'tipologia' => 'tipologia',
  'Attrezzatura_alberghiera' => 'punto_di_interesse',
  'Campeggio' => 'punto_di_interesse',
  'Farmacia' => 'punto_di_interesse',
  'Limitazione_al_transito' => 'punto_di_interesse',
  'Ostello' => 'punto_di_interesse',
  'Parcheggio' => 'punto_di_interesse',
  'Pericolo_valanghe' => 'punto_di_interesse',
  'Punto_panoramico_a_360_gradi' => 'punto_di_interesse',
  'Punto_panoramico_orientato_a_Est' => 'punto_di_interesse',
  'Punto_panoramico_orientato_a_Nord' => 'punto_di_interesse',
  'Punto_panoramico_orientato_a_Ovest' => 'punto_di_interesse',
  'Punto_panoramico_orientato_a_Sud' => 'punto_di_interesse',
  'Ricovero_di_emergenza' => 'punto_di_interesse',
  'Scuderia' => 'punto_di_interesse',
  'Sorgente_o_fontana' => 'punto_di_interesse',
  'Stazione_ferroviaria' => 'punto_di_interesse'
];


?>