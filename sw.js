const staticCacheName = 'site-static-v1';
const assets = [
   '/',
    '/assets/css/style.css',
    'https://cdn.jsdelivr.net/npm/@mdi/font@5.9.55/css/materialdesignicons.min.css',
    'https://cdn.jsdelivr.net/npm/vuetify@2.5.8/dist/vuetify.min.css',
 'https://cdn.jsdelivr.net/npm/lodash@4.17.21/lodash.min.js',
 'https://cdn.jsdelivr.net/npm/axios@0.21.1/dist/axios.min.js',
 'https://cdn.jsdelivr.net/npm/echarts@5.1.2/dist/echarts.min.js',
'https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.min.js',
'https://cdn.jsdelivr.net/npm/vue-router@3.5.2/dist/vue-router.min.js',
'https://cdn.jsdelivr.net/npm/vuetify@2.5.8/dist/vuetify.min.js',
'https://cryptotracker.top/assets/js/app.min.js?t=1652431350',
];
// install event
self.addEventListener('install', evt => {
  evt.waitUntil(
    caches.open(staticCacheName).then((cache) => {
      console.log('caching shell assets');
      cache.addAll(assets);
    })
  );
});
// activate event
self.addEventListener('activate', evt => {
  evt.waitUntil(
    caches.keys().then(keys => {
      return Promise.all(keys
        .filter(key => key !== staticCacheName)
        .map(key => caches.delete(key))
      );
    })
  );
});
// When we change the name we could have multiple cache, to avoid that we need to delet the old cache, so with this function we check the key that is our cache naming, if it is different from the actual naming we delete it, in this way we will always have only the last updated cache.
// fetch event
self.addEventListener('fetch', evt => {
  evt.respondWith(
    caches.match(evt.request).then(cacheRes => {
      return cacheRes || fetch(evt.request);
    })
  );
});