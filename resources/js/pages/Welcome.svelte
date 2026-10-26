<script lang="ts">
    import { Link, page } from '@inertiajs/svelte';
    import AppHead from '@/components/AppHead.svelte';
    import { toUrl } from '@/lib/utils';
    import { dashboard, login } from '@/routes';
    import { register } from '@/routes';

    const auth = $derived(page.props.auth);
</script>

<AppHead title="Welcome"></AppHead>

<div
    class="flex min-h-screen flex-col items-center bg-[#FDFDFC] p-6 text-[#1b1b18] lg:justify-center lg:p-8 dark:bg-[#0a0a0a]"
>
    <header
        class="mb-6 w-full max-w-[335px] text-sm not-has-[nav]:hidden lg:max-w-4xl"
    >
        <nav class="flex items-center justify-between gap-4">
            <div class="flex items-center gap-4">
                <span class="text-xl font-medium py-1.5 leading-normal text-[#1b1b18] dark:text-[#EDEDEC]">
                    Skill<span class="text-[#f53003] dark:text-[#FF4433]">Swap</span>
                </span>
                <br>
                <Link
                    href="/"
                    class="inline-block rounded-sm border border-transparent py-1.5 text-sm leading-normal text-[#1b1b18] dark:text-[#EDEDEC]"
                >
                    Home
                </Link>
                <Link
                    href="/learn"
                    class="inline-block rounded-sm border border-transparent py-1.5 text-sm leading-normal text-[#1b1b18] dark:text-[#EDEDEC]"
                >
                    Learn
                </Link>
                <Link
                    href="/share"
                    class="inline-block rounded-sm border border-transparent py-1.5 text-sm leading-normal text-[#1b1b18] dark:text-[#EDEDEC]"
                >
                    Share
                </Link>
                <Link
                    href="/earn"
                    class="inline-block rounded-sm border border-transparent py-1.5 text-sm leading-normal text-[#1b1b18] dark:text-[#EDEDEC]"
                >
                    Earn
                </Link>
                <Link
                    href="/about"
                    class="inline-block rounded-sm border border-transparent py-1.5 text-sm leading-normal text-[#1b1b18] dark:text-[#EDEDEC]"
                >
                    About
                </Link>
            </div>
            <div class="flex items-center gap-4">
                {#if auth.user}
                    <Link
                        href={toUrl(dashboard())}
                        class="inline-block rounded-sm border border-[#19140035] px-5 py-1.5 text-sm leading-normal text-[#1b1b18] hover:border-[#1915014a] dark:border-[#3E3E3A] dark:text-[#EDEDEC] dark:hover:border-[#62605b]"
                    >
                        Dashboard
                    </Link>
                {:else}
                    <Link
                        href={toUrl(login())}
                        class="inline-block rounded-sm border border-transparent px-5 py-1.5 text-sm leading-normal text-[#1b1b18] hover:border-[#19140035] dark:text-[#EDEDEC] dark:hover:border-[#3E3E3A]"
                    >
                        Log in
                    </Link>
                    <Link
                        href={toUrl(register())}
                        class="inline-block rounded-sm border border-[#19140035] px-5 py-1.5 text-sm leading-normal text-[#1b1b18] hover:border-[#1915014a] dark:border-[#3E3E3A] dark:text-[#EDEDEC] dark:hover:border-[#62605b]"
                    >
                        Register
                    </Link>
                {/if}
            </div>
        </nav>
    </header>
    <div class="lg:mt-auto w-full max-w-[335px] lg:max-w-4xl text-[#1b1b18] dark:text-[#EDEDEC] mb-6">
        <h1 class="text-4xl font-bold">Learn. Share. Earn.</h1>
        <br>
        <h2 class="text-[#706f6c] dark:text-[#A1A09A]">SkillSwap is your go-to hub for cost-effective learning with talented peers. Get started today with our curated skills.</h2>
    </div>
    <div
        class="flex w-full items-center justify-center opacity-100 transition-opacity duration-750 starting:opacity-0 lg:mb-auto"
    >
        <main
            class="flex w-full max-w-[335px] flex-col-reverse overflow-hidden rounded-lg lg:max-w-4xl lg:flex-row gap-4"
        >
            <div
                class="flex-1 rounded-lg bg-white p-6 text-[13px] leading-5 shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:bg-[#161615] dark:text-[#EDEDEC] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d]"
            >
                <h1 class="mb-1 font-medium">Chemistry Tutoring (Intermediate)</h1>
                <p class="mb-2 text-[#706f6c] dark:text-[#A1A09A]">
                    This chemistry skill covers Organic Chemistry, Stoichiometry, and Kinetics.
                </p>
                <ul class="mb-4 flex flex-col lg:mb-6">
                    <li
                        class="relative flex items-center gap-4 py-2 before:absolute before:top-1/2 before:bottom-0 before:left-[0.4rem] before:border-l before:border-[#e3e3e0] dark:before:border-[#3E3E3A]"
                    >
                        <span class="relative bg-white py-1 dark:bg-[#161615]">
                            <span
                                class="flex h-3.5 w-3.5 items-center justify-center rounded-full border border-[#e3e3e0] bg-[#FDFDFC] shadow-[0px_0px_1px_0px_rgba(0,0,0,0.03),0px_1px_2px_0px_rgba(0,0,0,0.06)] dark:border-[#3E3E3A] dark:bg-[#161615]"
                            >
                                <span
                                    class="h-1.5 w-1.5 rounded-full bg-[#dbdbd7] dark:bg-[#3E3E3A]"
                                ></span>
                            </span>
                        </span>
                        <span>
                            Flexible hours by your terms
                        </span>
                    </li>
                    <li
                        class="relative flex items-center gap-4 py-2 before:absolute before:top-0 before:bottom-1/2 before:left-[0.4rem] before:border-l before:border-[#e3e3e0] dark:before:border-[#3E3E3A]"
                    >
                        <span class="relative bg-white py-1 dark:bg-[#161615]">
                            <span
                                class="flex h-3.5 w-3.5 items-center justify-center rounded-full border border-[#e3e3e0] bg-[#FDFDFC] shadow-[0px_0px_1px_0px_rgba(0,0,0,0.03),0px_1px_2px_0px_rgba(0,0,0,0.06)] dark:border-[#3E3E3A] dark:bg-[#161615]"
                            >
                                <span
                                    class="h-1.5 w-1.5 rounded-full bg-[#dbdbd7] dark:bg-[#3E3E3A]"
                                ></span>
                            </span>
                        </span>
                        <span>
                            Skill by John Doe
                        </span>
                    </li>
                </ul>
                <ul class="flex gap-3 text-sm leading-normal">
                    <li>
                        <button
                            onclick={() => alert("You have booked a session with John Doe!")}
                            class="inline-block rounded-sm border border-black bg-[#1b1b18] px-5 py-1.5 text-sm leading-normal text-white hover:border-[#f53003] hover:bg-[#f53003] dark:border-[#eeeeec] dark:bg-[#eeeeec] dark:text-[#1C1C1A] dark:hover:border-[#f53003] dark:hover:bg-[#f53003] transition-all duration-200"
                        >
                            Book a Session with John Doe
                        </button>
                    </li>
                </ul>
            </div>
            <div
                class="flex-1 rounded-lg bg-white p-6 text-[13px] leading-5 shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:bg-[#161615] dark:text-[#EDEDEC] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d]"
            >
                <h1 class="mb-1 font-medium">Computer Science Tutoring (Advanced)</h1>
                <p class="mb-2 text-[#706f6c] dark:text-[#A1A09A]">
                    This computer science skill covers Operating Systems, Artificial Intelligence, and Cybersecurity.
                </p>
                <ul class="mb-4 flex flex-col lg:mb-6">
                    <li
                        class="relative flex items-center gap-4 py-2 before:absolute before:top-1/2 before:bottom-0 before:left-[0.4rem] before:border-l before:border-[#e3e3e0] dark:before:border-[#3E3E3A]"
                    >
                        <span class="relative bg-white py-1 dark:bg-[#161615]">
                            <span
                                class="flex h-3.5 w-3.5 items-center justify-center rounded-full border border-[#e3e3e0] bg-[#FDFDFC] shadow-[0px_0px_1px_0px_rgba(0,0,0,0.03),0px_1px_2px_0px_rgba(0,0,0,0.06)] dark:border-[#3E3E3A] dark:bg-[#161615]"
                            >
                                <span
                                    class="h-1.5 w-1.5 rounded-full bg-[#dbdbd7] dark:bg-[#3E3E3A]"
                                ></span>
                            </span>
                        </span>
                        <span>
                            Monday, Wednesday, and Friday
                        </span>
                    </li>
                    <li
                        class="relative flex items-center gap-4 py-2 before:absolute before:top-0 before:bottom-1/2 before:left-[0.4rem] before:border-l before:border-[#e3e3e0] dark:before:border-[#3E3E3A]"
                    >
                        <span class="relative bg-white py-1 dark:bg-[#161615]">
                            <span
                                class="flex h-3.5 w-3.5 items-center justify-center rounded-full border border-[#e3e3e0] bg-[#FDFDFC] shadow-[0px_0px_1px_0px_rgba(0,0,0,0.03),0px_1px_2px_0px_rgba(0,0,0,0.06)] dark:border-[#3E3E3A] dark:bg-[#161615]"
                            >
                                <span
                                    class="h-1.5 w-1.5 rounded-full bg-[#dbdbd7] dark:bg-[#3E3E3A]"
                                ></span>
                            </span>
                        </span>
                        <span>
                            Skill by Jane Doe
                        </span>
                    </li>
                </ul>
                <ul class="flex gap-3 text-sm leading-normal">
                    <li>
                        <button
                            onclick={() => alert("You have booked a session with Jane Doe!")}
                            class="inline-block rounded-sm border border-black bg-[#1b1b18] px-5 py-1.5 text-sm leading-normal text-white hover:border-[#f53003] hover:bg-[#f53003] dark:border-[#eeeeec] dark:bg-[#eeeeec] dark:text-[#1C1C1A] dark:hover:border-[#f53003] dark:hover:bg-[#f53003] transition-all duration-200"
                        >
                            Book a Session with Jane Doe
                        </button>
                    </li>
                </ul>
            </div>
            <div
                class="flex-1 rounded-lg bg-white p-6 text-[13px] leading-5 shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:bg-[#161615] dark:text-[#EDEDEC] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d]"
            >
                <h1 class="mb-1 font-medium">Engineering Science Tutoring (Beginner)</h1>
                <p class="mb-2 text-[#706f6c] dark:text-[#A1A09A]">
                    This computer science skill covers Hydraulics, Electronics, and Documentation.
                </p>
                <ul class="mb-4 flex flex-col lg:mb-6">
                    <li
                        class="relative flex items-center gap-4 py-2 before:absolute before:top-1/2 before:bottom-0 before:left-[0.4rem] before:border-l before:border-[#e3e3e0] dark:before:border-[#3E3E3A]"
                    >
                        <span class="relative bg-white py-1 dark:bg-[#161615]">
                            <span
                                class="flex h-3.5 w-3.5 items-center justify-center rounded-full border border-[#e3e3e0] bg-[#FDFDFC] shadow-[0px_0px_1px_0px_rgba(0,0,0,0.03),0px_1px_2px_0px_rgba(0,0,0,0.06)] dark:border-[#3E3E3A] dark:bg-[#161615]"
                            >
                                <span
                                    class="h-1.5 w-1.5 rounded-full bg-[#dbdbd7] dark:bg-[#3E3E3A]"
                                ></span>
                            </span>
                        </span>
                        <span>
                            Mondays Afternoons and Friday Mornings
                        </span>
                    </li>
                    <li
                        class="relative flex items-center gap-4 py-2 before:absolute before:top-0 before:bottom-1/2 before:left-[0.4rem] before:border-l before:border-[#e3e3e0] dark:before:border-[#3E3E3A]"
                    >
                        <span class="relative bg-white py-1 dark:bg-[#161615]">
                            <span
                                class="flex h-3.5 w-3.5 items-center justify-center rounded-full border border-[#e3e3e0] bg-[#FDFDFC] shadow-[0px_0px_1px_0px_rgba(0,0,0,0.03),0px_1px_2px_0px_rgba(0,0,0,0.06)] dark:border-[#3E3E3A] dark:bg-[#161615]"
                            >
                                <span
                                    class="h-1.5 w-1.5 rounded-full bg-[#dbdbd7] dark:bg-[#3E3E3A]"
                                ></span>
                            </span>
                        </span>
                        <span>
                            Skill by James Doe
                        </span>
                    </li>
                </ul>
                <ul class="flex gap-3 text-sm leading-normal">
                    <li>
                        <button
                            onclick={() => alert("You have booked a session with James Doe!")}
                            class="inline-block rounded-sm border border-black bg-[#1b1b18] px-5 py-1.5 text-sm leading-normal text-white hover:border-[#f53003] hover:bg-[#f53003] dark:border-[#eeeeec] dark:bg-[#eeeeec] dark:text-[#1C1C1A] dark:hover:border-[#f53003] dark:hover:bg-[#f53003] transition-all duration-200"
                        >
                            Book a Session with James Doe
                        </button>
                    </li>
                </ul>
            </div>
            <div
                class="flex-1 rounded-lg bg-white p-6 text-[13px] leading-5 shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:bg-[#161615] dark:text-[#EDEDEC] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d]"
            >
                <h1 class="mb-1 font-medium">Computer Science Tutoring (Advanced)</h1>
                <p class="mb-2 text-[#706f6c] dark:text-[#A1A09A]">
                    This computer science skill covers Operating Systems, Artificial Intelligence, and Cybersecurity.
                </p>
                <ul class="mb-4 flex flex-col lg:mb-6">
                    <li
                        class="relative flex items-center gap-4 py-2 before:absolute before:top-1/2 before:bottom-0 before:left-[0.4rem] before:border-l before:border-[#e3e3e0] dark:before:border-[#3E3E3A]"
                    >
                        <span class="relative bg-white py-1 dark:bg-[#161615]">
                            <span
                                class="flex h-3.5 w-3.5 items-center justify-center rounded-full border border-[#e3e3e0] bg-[#FDFDFC] shadow-[0px_0px_1px_0px_rgba(0,0,0,0.03),0px_1px_2px_0px_rgba(0,0,0,0.06)] dark:border-[#3E3E3A] dark:bg-[#161615]"
                            >
                                <span
                                    class="h-1.5 w-1.5 rounded-full bg-[#dbdbd7] dark:bg-[#3E3E3A]"
                                ></span>
                            </span>
                        </span>
                        <span>
                            Saturday and Sunday Mornings
                        </span>
                    </li>
                    <li
                        class="relative flex items-center gap-4 py-2 before:absolute before:top-0 before:bottom-1/2 before:left-[0.4rem] before:border-l before:border-[#e3e3e0] dark:before:border-[#3E3E3A]"
                    >
                        <span class="relative bg-white py-1 dark:bg-[#161615]">
                            <span
                                class="flex h-3.5 w-3.5 items-center justify-center rounded-full border border-[#e3e3e0] bg-[#FDFDFC] shadow-[0px_0px_1px_0px_rgba(0,0,0,0.03),0px_1px_2px_0px_rgba(0,0,0,0.06)] dark:border-[#3E3E3A] dark:bg-[#161615]"
                            >
                                <span
                                    class="h-1.5 w-1.5 rounded-full bg-[#dbdbd7] dark:bg-[#3E3E3A]"
                                ></span>
                            </span>
                        </span>
                        <span>
                            Skill by Jami Doe
                        </span>
                    </li>
                </ul>
                <ul class="flex gap-3 text-sm leading-normal">
                    <li>
                        <button
                            onclick={() => alert("You have booked a session with Jami Doe!")}
                            class="inline-block rounded-sm border border-black bg-[#1b1b18] px-5 py-1.5 text-sm leading-normal text-white hover:border-[#f53003] hover:bg-[#f53003] dark:border-[#eeeeec] dark:bg-[#eeeeec] dark:text-[#1C1C1A] dark:hover:border-[#f53003] dark:hover:bg-[#f53003] transition-all duration-200"
                        >
                            Book a Session with Jami Doe
                        </button>
                    </li>
                </ul>
            </div>
        </main>
    </div>
    <footer class="pt-6 text-[#1b1b18] dark:text-[#EDEDEC] w-full max-w-[335px] lg:max-w-4xl">
        <p class="text-[#706f6c] dark:text-[#A1A09A]">SkillSwap is a platform for users to learn new skills cost-effectively through high-quality and personal learning experience with a verified expert.</p>
        <br>
        <p>&copy; Copyright 2026 SkillSwap Inc. All rights reserved.</p>
    </footer>
</div>
