<template>
  <main>
    <Head :title="title" />
    <header>
      <Link href="/home">Home</Link>
      <Link href="/about">About</Link>
      <Link href="/users">Data User</Link>
    </header>
    <article>
      <slot />
    </article>
  </main>
</template>

<script>
import { Link,Head } from '@inertiajs/inertia-vue'

export default {
  components: {
    Link,
    Head
  },
  props: ['title']
}
</script>