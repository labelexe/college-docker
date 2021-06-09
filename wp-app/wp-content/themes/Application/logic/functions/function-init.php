<?php

/*
 * Functions создана для разгрузки логики в functions.php
 * С импортом необходимых компонентов (функций) приложение становиться более модульным.
 */

/**
 * Подключаем functions Add Components
 */
require_once LOGIC_THEME_PATH_FUNCTIONS . '/frontAddComponents.php';

/**
 * Подключаем functions для navbar
 */
require_once LOGIC_THEME_PATH_FUNCTIONS . '/navbar.php';


// *** Оптимизация front-части

/** Подлкючаем functions remove-actions */
require_once LOGIC_THEME_PATH_FUNCTIONS . '/remove-optimized.php';
