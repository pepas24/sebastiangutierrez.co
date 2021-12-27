---
title: Mi primer post usando Netlify CMS y Jigsaw
date: 2021-12-26
excerpt: Simplemente un post de prueba para ver cómo es el flujo de publicación
  usando Netlify CMS y Jigsaw
extends: _layouts.post
section: content
---
Prueba de contenido usando Netlify CMS y Jigsaw.

## Este es un título

Esta es una descripción larga que contiene además un link a un artículos de Wikipedia sobre el [Y2K](https://es.wikipedia.org/wiki/Problema_del_a%C3%B1o_2000).

![Imagen de prueba](assets/images/uploads/image-placeholder.png "Imagen de prueba")

También podemos probar cómo se ve un fragmento de código en javascript:

```javascript
function getRandomArbitrary(min, max) {
  return Math.random() * (max - min) + min;
}
getRandomArbitrary(1, 10)
```

También podemos probar cómo se ve un fragmento de código en css:

```css
body {
  background-color: red;
}
```

Y pongamos una cita por aquí:

> There are only two hard things in Computer Science: cache invalidation and naming things.
>
> \-- Phil Karlto

### Listas!

Que tal una lista numerada y luego otra desodenada

1. primer elemento
2. Segundo elemento
3. Tercer elemento

   1. Anidado uno
   2. Anidado dos

* Primer elemento
* Segundo elemento
* Tercer elemento

  * Anidado uno
  * Anidado dos