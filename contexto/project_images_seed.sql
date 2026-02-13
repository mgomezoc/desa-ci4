-- Actualiza cover_image y galería JSON de proyectos con imágenes reales en public/assets/images/proyectos
SET NAMES utf8mb4;

UPDATE projects
SET
    cover_image = 'assets/images/proyectos/01.-PLAZA VIA PUERTA DE HIERRO/Cubierta de estructura metalica.png',
    content_payload = JSON_SET(
        COALESCE(content_payload, JSON_OBJECT()),
        '$.gallery_images', JSON_ARRAY(
            'assets/images/proyectos/01.-PLAZA VIA PUERTA DE HIERRO/Cubierta de estructura metalica.png',
            'assets/images/proyectos/01.-PLAZA VIA PUERTA DE HIERRO/Diseño de escaleras y cubiertas 1.png',
            'assets/images/proyectos/01.-PLAZA VIA PUERTA DE HIERRO/Diseño de escaleras y cubiertas 2.png',
            'assets/images/proyectos/01.-PLAZA VIA PUERTA DE HIERRO/Diseño estructural de pergolado.jpg'
        )
    )
WHERE slug = 'plaza-via-puerta-de-hierro';

UPDATE projects
SET
    cover_image = 'assets/images/proyectos/02.-AGENCIA MERCEDES BENZ LA RIOJA/Diseño estructural (1).png',
    content_payload = JSON_SET(
        COALESCE(content_payload, JSON_OBJECT()),
        '$.gallery_images', JSON_ARRAY(
            'assets/images/proyectos/02.-AGENCIA MERCEDES BENZ LA RIOJA/Diseño estructural (1).png',
            'assets/images/proyectos/02.-AGENCIA MERCEDES BENZ LA RIOJA/Diseño estructural (2).png',
            'assets/images/proyectos/02.-AGENCIA MERCEDES BENZ LA RIOJA/Diseño estructural (3).png',
            'assets/images/proyectos/02.-AGENCIA MERCEDES BENZ LA RIOJA/render del proyecto (1).jpg',
            'assets/images/proyectos/02.-AGENCIA MERCEDES BENZ LA RIOJA/render del proyecto (2).jpg'
        )
    )
WHERE slug = 'agencia-mercedes-benz-la-rioja';

UPDATE projects
SET
    cover_image = 'assets/images/proyectos/03.-PLAZA COMERCIAL ANDENES GUADALUPE/Diseño estructural de cubierta en terrazas 2.png',
    content_payload = JSON_SET(
        COALESCE(content_payload, JSON_OBJECT()),
        '$.gallery_images', JSON_ARRAY(
            'assets/images/proyectos/03.-PLAZA COMERCIAL ANDENES GUADALUPE/Diseño estructural de cubierta en terrazas 2.png',
            'assets/images/proyectos/03.-PLAZA COMERCIAL ANDENES GUADALUPE/Diseño estructural de cubierta en terrazas render 2.jpg',
            'assets/images/proyectos/03.-PLAZA COMERCIAL ANDENES GUADALUPE/Diseño estructural de cubierta en terrazas render.jpg',
            'assets/images/proyectos/03.-PLAZA COMERCIAL ANDENES GUADALUPE/Diseño estructural de cubierta en terrazas.png'
        )
    )
WHERE slug = 'plaza-comercial-andenes-guadalupe';

UPDATE projects
SET
    cover_image = 'assets/images/proyectos/05.-PREPA U-ERRE/Diseño estructural de fachada con tubos 2.png',
    content_payload = JSON_SET(
        COALESCE(content_payload, JSON_OBJECT()),
        '$.gallery_images', JSON_ARRAY(
            'assets/images/proyectos/05.-PREPA U-ERRE/Diseño estructural de fachada con tubos 2.png',
            'assets/images/proyectos/05.-PREPA U-ERRE/Diseño estructural de fachada con tubos 3.png',
            'assets/images/proyectos/05.-PREPA U-ERRE/Diseño estructural de fachada con tubos.png'
        )
    )
WHERE slug = 'preparatoria-u-erre';

UPDATE projects
SET
    cover_image = 'assets/images/proyectos/06.-PLAZA MADERO/Diseño estructural de plaza 2.jpg',
    content_payload = JSON_SET(
        COALESCE(content_payload, JSON_OBJECT()),
        '$.gallery_images', JSON_ARRAY(
            'assets/images/proyectos/06.-PLAZA MADERO/Diseño estructural de plaza 2.jpg',
            'assets/images/proyectos/06.-PLAZA MADERO/Diseño estructural de plaza.png'
        )
    )
WHERE slug = 'plaza-madero';

UPDATE projects
SET
    cover_image = 'assets/images/proyectos/07.-COMEDOR VALMONT/Diseño estructural de fachada en comedor (1).jpeg',
    content_payload = JSON_SET(
        COALESCE(content_payload, JSON_OBJECT()),
        '$.gallery_images', JSON_ARRAY(
            'assets/images/proyectos/07.-COMEDOR VALMONT/Diseño estructural de fachada en comedor (1).jpeg',
            'assets/images/proyectos/07.-COMEDOR VALMONT/Diseño estructural de fachada en comedor (2).jpeg',
            'assets/images/proyectos/07.-COMEDOR VALMONT/Diseño estructural de fachada en comedor (3).jpeg'
        )
    )
WHERE slug = 'comedor-valmont';

UPDATE projects
SET
    cover_image = 'assets/images/proyectos/08.-CANCHAS KIA/Diseño estructural de palapas (1).jpg',
    content_payload = JSON_SET(
        COALESCE(content_payload, JSON_OBJECT()),
        '$.gallery_images', JSON_ARRAY(
            'assets/images/proyectos/08.-CANCHAS KIA/Diseño estructural de palapas (1).jpg',
            'assets/images/proyectos/08.-CANCHAS KIA/Diseño estructural de palapas (2).jpg',
            'assets/images/proyectos/08.-CANCHAS KIA/Diseño estructural de palapas (3).jpg',
            'assets/images/proyectos/08.-CANCHAS KIA/Render-Complejo canchas y recreativo KIA.jpg',
            'assets/images/proyectos/08.-CANCHAS KIA/Render-Edificio de oficinas generales.jpg',
            'assets/images/proyectos/08.-CANCHAS KIA/Render-Palapas KIA.jpg'
        )
    )
WHERE slug = 'deportivo-kia';

UPDATE projects
SET
    cover_image = 'assets/images/proyectos/09.-NAVE MANTRA REBASA/3652371868.png',
    content_payload = JSON_SET(
        COALESCE(content_payload, JSON_OBJECT()),
        '$.gallery_images', JSON_ARRAY(
            'assets/images/proyectos/09.-NAVE MANTRA REBASA/3652371868.png',
            'assets/images/proyectos/09.-NAVE MANTRA REBASA/384718371394.png',
            'assets/images/proyectos/09.-NAVE MANTRA REBASA/4385286648.png',
            'assets/images/proyectos/09.-NAVE MANTRA REBASA/48261465155.png',
            'assets/images/proyectos/09.-NAVE MANTRA REBASA/4832646515.png',
            'assets/images/proyectos/09.-NAVE MANTRA REBASA/imagen 1.11.png'
        )
    )
WHERE slug = 'nave-mantra-rebasa';

UPDATE projects
SET
    cover_image = 'assets/images/proyectos/10.-NAVE CAN YOUNCHANG/25413525.png',
    content_payload = JSON_SET(
        COALESCE(content_payload, JSON_OBJECT()),
        '$.gallery_images', JSON_ARRAY(
            'assets/images/proyectos/10.-NAVE CAN YOUNCHANG/25413525.png',
            'assets/images/proyectos/10.-NAVE CAN YOUNCHANG/257413515.png'
        )
    )
WHERE slug = 'nave-younchang';

UPDATE projects
SET
    cover_image = 'assets/images/proyectos/11.-BAÑOS BENDALL/2541358286.png',
    content_payload = JSON_SET(
        COALESCE(content_payload, JSON_OBJECT()),
        '$.gallery_images', JSON_ARRAY(
            'assets/images/proyectos/11.-BAÑOS BENDALL/2541358286.png',
            'assets/images/proyectos/11.-BAÑOS BENDALL/8376652.png'
        )
    )
WHERE slug = 'cubierta-banos-vynmsa';

UPDATE projects
SET
    cover_image = 'assets/images/proyectos/12.-MEZZANINE NIFCO/3515365324.png',
    content_payload = JSON_SET(
        COALESCE(content_payload, JSON_OBJECT()),
        '$.gallery_images', JSON_ARRAY(
            'assets/images/proyectos/12.-MEZZANINE NIFCO/3515365324.png',
            'assets/images/proyectos/12.-MEZZANINE NIFCO/351543265.png',
            'assets/images/proyectos/12.-MEZZANINE NIFCO/365176517385.png',
            'assets/images/proyectos/12.-MEZZANINE NIFCO/386556143265.png'
        )
    )
WHERE slug = 'mezzanine-nifco';

UPDATE projects
SET
    cover_image = 'assets/images/proyectos/13.-IDEKA LAS HUASTECAS/28561486546.png',
    content_payload = JSON_SET(
        COALESCE(content_payload, JSON_OBJECT()),
        '$.gallery_images', JSON_ARRAY(
            'assets/images/proyectos/13.-IDEKA LAS HUASTECAS/28561486546.png',
            'assets/images/proyectos/13.-IDEKA LAS HUASTECAS/32154635.png',
            'assets/images/proyectos/13.-IDEKA LAS HUASTECAS/68475879845.png',
            'assets/images/proyectos/13.-IDEKA LAS HUASTECAS/WhatsApp Image 2020-07-28 at 15.50.03.jpeg',
            'assets/images/proyectos/13.-IDEKA LAS HUASTECAS/WhatsApp Image 2020-07-28 at 15.50.04.jpeg'
        )
    )
WHERE slug = 'canopys-las-huastecas';
