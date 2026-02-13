-- Actualiza cover_image y galería JSON de proyectos con imágenes reales en public/assets/images/proyectos
SET NAMES utf8mb4;

UPDATE projects
SET
    cover_image = 'assets/images/proyectos/01-plaza-via-puerta-de-hierro/cubierta-de-estructura-metalica.png',
    content_payload = JSON_SET(
        COALESCE(content_payload, JSON_OBJECT()),
        '$.gallery_images', JSON_ARRAY(
            'assets/images/proyectos/01-plaza-via-puerta-de-hierro/cubierta-de-estructura-metalica.png',
            'assets/images/proyectos/01-plaza-via-puerta-de-hierro/diseno-de-escaleras-y-cubiertas-1.png',
            'assets/images/proyectos/01-plaza-via-puerta-de-hierro/diseno-de-escaleras-y-cubiertas-2.png',
            'assets/images/proyectos/01-plaza-via-puerta-de-hierro/diseno-estructural-de-pergolado.jpg'
        )
    )
WHERE slug = 'plaza-via-puerta-de-hierro';

UPDATE projects
SET
    cover_image = 'assets/images/proyectos/02-agencia-mercedes-benz-la-rioja/diseno-estructural-1.png',
    content_payload = JSON_SET(
        COALESCE(content_payload, JSON_OBJECT()),
        '$.gallery_images', JSON_ARRAY(
            'assets/images/proyectos/02-agencia-mercedes-benz-la-rioja/diseno-estructural-1.png',
            'assets/images/proyectos/02-agencia-mercedes-benz-la-rioja/diseno-estructural-2.png',
            'assets/images/proyectos/02-agencia-mercedes-benz-la-rioja/diseno-estructural-3.png',
            'assets/images/proyectos/02-agencia-mercedes-benz-la-rioja/render-del-proyecto-1.jpg',
            'assets/images/proyectos/02-agencia-mercedes-benz-la-rioja/render-del-proyecto-2.jpg'
        )
    )
WHERE slug = 'agencia-mercedes-benz-la-rioja';

UPDATE projects
SET
    cover_image = 'assets/images/proyectos/03-plaza-comercial-andenes-guadalupe/diseno-estructural-de-cubierta-en-terrazas-2.png',
    content_payload = JSON_SET(
        COALESCE(content_payload, JSON_OBJECT()),
        '$.gallery_images', JSON_ARRAY(
            'assets/images/proyectos/03-plaza-comercial-andenes-guadalupe/diseno-estructural-de-cubierta-en-terrazas-2.png',
            'assets/images/proyectos/03-plaza-comercial-andenes-guadalupe/diseno-estructural-de-cubierta-en-terrazas-render-2.jpg',
            'assets/images/proyectos/03-plaza-comercial-andenes-guadalupe/diseno-estructural-de-cubierta-en-terrazas-render.jpg',
            'assets/images/proyectos/03-plaza-comercial-andenes-guadalupe/diseno-estructural-de-cubierta-en-terrazas.png'
        )
    )
WHERE slug = 'plaza-comercial-andenes-guadalupe';

UPDATE projects
SET
    cover_image = 'assets/images/proyectos/05-prepa-u-erre/diseno-estructural-de-fachada-con-tubos-2.png',
    content_payload = JSON_SET(
        COALESCE(content_payload, JSON_OBJECT()),
        '$.gallery_images', JSON_ARRAY(
            'assets/images/proyectos/05-prepa-u-erre/diseno-estructural-de-fachada-con-tubos-2.png',
            'assets/images/proyectos/05-prepa-u-erre/diseno-estructural-de-fachada-con-tubos-3.png',
            'assets/images/proyectos/05-prepa-u-erre/diseno-estructural-de-fachada-con-tubos.png'
        )
    )
WHERE slug = 'preparatoria-u-erre';

UPDATE projects
SET
    cover_image = 'assets/images/proyectos/06-plaza-madero/diseno-estructural-de-plaza-2.jpg',
    content_payload = JSON_SET(
        COALESCE(content_payload, JSON_OBJECT()),
        '$.gallery_images', JSON_ARRAY(
            'assets/images/proyectos/06-plaza-madero/diseno-estructural-de-plaza-2.jpg',
            'assets/images/proyectos/06-plaza-madero/diseno-estructural-de-plaza.png'
        )
    )
WHERE slug = 'plaza-madero';

UPDATE projects
SET
    cover_image = 'assets/images/proyectos/07-comedor-valmont/diseno-estructural-de-fachada-en-comedor-1.jpeg',
    content_payload = JSON_SET(
        COALESCE(content_payload, JSON_OBJECT()),
        '$.gallery_images', JSON_ARRAY(
            'assets/images/proyectos/07-comedor-valmont/diseno-estructural-de-fachada-en-comedor-1.jpeg',
            'assets/images/proyectos/07-comedor-valmont/diseno-estructural-de-fachada-en-comedor-2.jpeg',
            'assets/images/proyectos/07-comedor-valmont/diseno-estructural-de-fachada-en-comedor-3.jpeg'
        )
    )
WHERE slug = 'comedor-valmont';

UPDATE projects
SET
    cover_image = 'assets/images/proyectos/08-canchas-kia/diseno-estructural-de-palapas-1.jpg',
    content_payload = JSON_SET(
        COALESCE(content_payload, JSON_OBJECT()),
        '$.gallery_images', JSON_ARRAY(
            'assets/images/proyectos/08-canchas-kia/diseno-estructural-de-palapas-1.jpg',
            'assets/images/proyectos/08-canchas-kia/diseno-estructural-de-palapas-2.jpg',
            'assets/images/proyectos/08-canchas-kia/diseno-estructural-de-palapas-3.jpg',
            'assets/images/proyectos/08-canchas-kia/render-complejo-canchas-y-recreativo-kia.jpg',
            'assets/images/proyectos/08-canchas-kia/render-edificio-de-oficinas-generales.jpg',
            'assets/images/proyectos/08-canchas-kia/render-palapas-kia.jpg'
        )
    )
WHERE slug = 'deportivo-kia';

UPDATE projects
SET
    cover_image = 'assets/images/proyectos/09-nave-mantra-rebasa/3652371868.png',
    content_payload = JSON_SET(
        COALESCE(content_payload, JSON_OBJECT()),
        '$.gallery_images', JSON_ARRAY(
            'assets/images/proyectos/09-nave-mantra-rebasa/3652371868.png',
            'assets/images/proyectos/09-nave-mantra-rebasa/384718371394.png',
            'assets/images/proyectos/09-nave-mantra-rebasa/4385286648.png',
            'assets/images/proyectos/09-nave-mantra-rebasa/48261465155.png',
            'assets/images/proyectos/09-nave-mantra-rebasa/4832646515.png',
            'assets/images/proyectos/09-nave-mantra-rebasa/imagen-1-11.png'
        )
    )
WHERE slug = 'nave-mantra-rebasa';

UPDATE projects
SET
    cover_image = 'assets/images/proyectos/10-nave-can-younchang/25413525.png',
    content_payload = JSON_SET(
        COALESCE(content_payload, JSON_OBJECT()),
        '$.gallery_images', JSON_ARRAY(
            'assets/images/proyectos/10-nave-can-younchang/25413525.png',
            'assets/images/proyectos/10-nave-can-younchang/257413515.png'
        )
    )
WHERE slug = 'nave-younchang';

UPDATE projects
SET
    cover_image = 'assets/images/proyectos/11-banos-bendall/2541358286.png',
    content_payload = JSON_SET(
        COALESCE(content_payload, JSON_OBJECT()),
        '$.gallery_images', JSON_ARRAY(
            'assets/images/proyectos/11-banos-bendall/2541358286.png',
            'assets/images/proyectos/11-banos-bendall/8376652.png'
        )
    )
WHERE slug = 'cubierta-banos-vynmsa';

UPDATE projects
SET
    cover_image = 'assets/images/proyectos/12-mezzanine-nifco/3515365324.png',
    content_payload = JSON_SET(
        COALESCE(content_payload, JSON_OBJECT()),
        '$.gallery_images', JSON_ARRAY(
            'assets/images/proyectos/12-mezzanine-nifco/3515365324.png',
            'assets/images/proyectos/12-mezzanine-nifco/351543265.png',
            'assets/images/proyectos/12-mezzanine-nifco/365176517385.png',
            'assets/images/proyectos/12-mezzanine-nifco/386556143265.png'
        )
    )
WHERE slug = 'mezzanine-nifco';

UPDATE projects
SET
    cover_image = 'assets/images/proyectos/13-ideka-las-huastecas/28561486546.png',
    content_payload = JSON_SET(
        COALESCE(content_payload, JSON_OBJECT()),
        '$.gallery_images', JSON_ARRAY(
            'assets/images/proyectos/13-ideka-las-huastecas/28561486546.png',
            'assets/images/proyectos/13-ideka-las-huastecas/32154635.png',
            'assets/images/proyectos/13-ideka-las-huastecas/68475879845.png',
            'assets/images/proyectos/13-ideka-las-huastecas/whatsapp-image-2020-07-28-at-15-50-03.jpeg',
            'assets/images/proyectos/13-ideka-las-huastecas/whatsapp-image-2020-07-28-at-15-50-04.jpeg'
        )
    )
WHERE slug = 'canopys-las-huastecas';
