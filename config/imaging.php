<?php

use Whiterhino\Imaging\Handlers\{
	GdHandler,
	ImagickHandler,
	ImagemagickHandler
};

use Whiterhino\Imaging\Types\{
	XPositionType,
	YPositionType
};

return [
     /*
     | -------------------------------------------------------------------------
     | Обработчик по умолчанию.
     | -------------------------------------------------------------------------
     |
     | Обработчик изображений по умолчанию. Возможные значения:
     | GdHandler::class, ImagickHandler::class or ImagemagickHandler::class.
     |
     */

    'default_handler' => GdHandler::class,
    //'default_handler' => ImagickHandler::class,
    //'default_handler' => ImagemagickHandler::class,


    /*
    | -------------------------------------------------------------------------
    | Диск для хранения публичного кеша изображений.
    | -------------------------------------------------------------------------
    |
    | Laravel диск на который будут записываться кеш обработанных изображений.
    | Должен быть публичным и задан в config/filesystem.php
    |
    */

    'public_cache_disk' => 'imagecache',


    /*
     | -------------------------------------------------------------------------
     | Директория для временных файлов.
     | -------------------------------------------------------------------------
     |
     | Директория для временных файлов которые создаются во время обработки изображения.
     |
     */

    'temp_dir' => sys_get_temp_dir() . DIRECTORY_SEPARATOR,


    /*
     | -------------------------------------------------------------------------
     | Отладка.
     | -------------------------------------------------------------------------
     |
     | Определяет режим отладки обработки изображений. В режиме отладки, ошибки
     | обработки изображения возбуждают исключение ImagingException (например
     | в случае отсутствия изображения). В противном случае, возвращается null.
     |
     */

    'debug' => (bool) env('APP_DEBUG', false),


    /*
     | -------------------------------------------------------------------------
     | Цвет фона.
     | -------------------------------------------------------------------------
     |
     | Устанавливает цвет фона для изображения.
     |
     | Для установки прозрачного фона установите значение null.
     |
     */

    'bgcolor' => null,


    /*
     | -------------------------------------------------------------------------
     | Запасной цвет фона для изображений у которых не может быть прозрачного фона.
     | -------------------------------------------------------------------------
     |
     | Устанавливает цвет фона в случае если изображение не может иметь прозрачный
     | фон, а настройка bgcolor равна null.
     |
     | Настройка bgcolor может иметь значение null и например, для jpeg изображения
     | это означало бы, что заливка фона будет выполнена в черный цвет. Что-бы
     | предотвратить такое, нежелательное поведение, нужно указать дополнительную
     | настройку цвета фона. Этот цвет будет использован для заливки фона в случае
     | если bgcolor равен null.
     |
     */

    'second_color' => '#FFF',


    /*
     | -------------------------------------------------------------------------
     | Качество.
     | -------------------------------------------------------------------------
     |
     | Определяет качество сохраняемых изображений (для тех форматов которые
     | имеют такую возможность).
     |
     */

    'quality' => 70,


    /*
     | -------------------------------------------------------------------------
     | Настройки водного знака.
     | -------------------------------------------------------------------------
     |
     | watermark_filename - абсолютный путь к файлу водного знака.
     |
     */

    'watermark_filename' => '',
    //'watermark_filename' => storage_path('app/preload/watermark/default.png'),


    /*
     | -------------------------------------------------------------------------
     | Настройки водного знака.
     | -------------------------------------------------------------------------
     |
     | Устанавливает прозрачность водного знака добавляемого на изображение.
     |
     */

    'watermark_alpha' => 75,


    /*
     | -------------------------------------------------------------------------
     | Настройки водного знака.
     | -------------------------------------------------------------------------
     |
     | watermark_position - положение водного знака на изображении.
     | Например: "bottom right", "center center", "top left".
     |
     */

    'watermark_x_position' => XPositionType::RIGHT,
    'watermark_y_position' => YPositionType::BOTTOM,


    /*
     | -------------------------------------------------------------------------
     | Настройки водного знака.
     | -------------------------------------------------------------------------
     |
     | watermark_padding - отступы для водного знака (в пикселях).
     |
     */

    'watermark_x_pad' => 50,
    'watermark_y_pad' => 50,


    /*
     | -------------------------------------------------------------------------
     | Путь к исполняемым файлам Imagemagick. Только для Imagemagick драйвера.
     | -------------------------------------------------------------------------
     |
     | Абсолютный путь до библиотеки (исполняемым файлам) Imagemagick.
     |
     */

    'imagemagick_dir' => '/usr/bin/',
];
