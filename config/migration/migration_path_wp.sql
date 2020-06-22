UPDATE wp_options SET option_value = replace(
  option_value,
  'http://localhost/curso-wp',
  'http://localhost::8082'
  )
WHERE option_name = 'home' OR option_name = 'siteurl';

UPDATE wp_posts SET guid = replace(
  guid,
  'http://localhost/curso-wp',
  'http://localhost::8082'
);

UPDATE wp_posts SET post_content = replace(
  post_content,
  'http://localhost/curso-wp',
  'http://localhost::8082'
);

UPDATE wp_postmeta SET meta_value = replace(
  meta_value,
  'http://localhost/curso-wp',
  'http://localhost::8082'
);
