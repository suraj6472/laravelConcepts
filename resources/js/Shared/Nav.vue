<template>
    <nav class="ml-6">
        <ul class="flex space-x-6">
            <!-- <li><Link class="text-blue-500 hover:underline" href="/" :class="{'font-bold underline': true}">Home</Link></li> -->
            <!-- check 1 -->
            <!-- <li><Link class="text-blue-500 hover:underline" href="/" :class="{'font-bold underline': $page.url === '/'}">Home</Link></li> -->
            <!-- check 2 -->
            <!-- <li><Link class="text-blue-500 hover:underline" href="/" :class="{'font-bold underline': $page.component === 'Home'}">Home</Link></li> -->
            <!-- check 3 -->
            <!-- <li><Link class="text-blue-500 hover:underline" href="/users?foo=bar" :class="{'font-bold underline': $page.url.startsWith('/users')}">User</Link></li> -->   <!-- check 4 -->

            <li>
                <!-- <Link
                    class="text-blue-500 hover:underline"
                    href="/"
                    :class="{
                        'font-bold underline': $page.component === 'Home',
                    }"
                    >Home</Link
                > --> <!-- check 5 -->
                <NavLink href="/" :active="$page.component === 'Home'">Home</NavLink>
            </li>
            <li>
                <NavLink href="/users" :active="$page.component === 'User'">User</NavLink>
            </li>
            <li>
                <NavLink href="/settings" :active="$page.component === 'Setting'">Setting</NavLink>
            </li>
            <li>
                <NavLink href="/logout" method="post">Logout</NavLink>
            </li>
        </ul>
    </nav>
</template>

<script>
import NavLink from './NavLink'
export default {
    components: { NavLink },
};
</script>
