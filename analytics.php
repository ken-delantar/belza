<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <linkhref="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
<link rel="stylesheet" href="styles/global.css">
  <link rel="stylesheet" href="login.css">
  <title>Dashboard</title>
</head>

<body>
  <div class="flex h-screen bg-[#fbfbfe]">
    <aside class="w-80 hidden md:flex md:flex-col border m-4 mr-0 rounded-lg overflow-hidden">
      <p class='m-4 mb-12 font-bold text-2xl text-center text-[#00446b]'>NextFleet Dynamics</p>

      <div class="flex flex-col mr-4">
        <div class="flex relative my-1 cursor-pointer">
          <a class='flex relative my-1 w-full' href="analytics.php">
            <span class='w-4 rounded-xl absolute -left-2 h-full bg-[#00446b]'>
            </span>
            <p class='ml-8 flex w-full p-1 rounded-xl font-semibold text-white bg-[#00446b]'>
              <span class="flex items-center gap-1 text-lg px-1"></span>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="icon icon-tabler icons-tabler-outline icon-tabler-chart-bar">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M3 13a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
                  <path d="M15 9a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v10a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
                  <path d="M9 5a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v14a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
                  <path d="M4 20h14" />
                </svg>
                Analytics
              </span>
            </p>
          </a>
        </div>

        <div class='flex relative my-1 cursor-pointer'>
          <a class='ml-8 flex p-1 w-full rounded-xl text-[#008ee0] mr-4' href="dashboard.php">
            <span class='flex items-center gap-1 px-1'>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"
                class="icon icon-tabler icons-tabler-filled icon-tabler-layout-dashboard">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path
                  d="M9 3a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-4a2 2 0 0 1 -2 -2v-6a2 2 0 0 1 2 -2zm0 12a2 2 0 0 1 2 2v2a2 2 0 0 1 -2 2h-4a2 2 0 0 1 -2 -2v-2a2 2 0 0 1 2 -2zm10 -4a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-4a2 2 0 0 1 -2 -2v-6a2 2 0 0 1 2 -2zm0 -8a2 2 0 0 1 2 2v2a2 2 0 0 1 -2 2h-4a2 2 0 0 1 -2 -2v-2a2 2 0 0 1 2 -2z" />
              </svg>
              <p>Dashboard</p>
            </span>
          </a>
        </div>

        <div class='flex relative my-1 cursor-pointer'>
          <a class='ml-8 flex p-1 w-full rounded-xl mr-4' href="reports.php">
            <span class='flex items-center gap-1 px-1'>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="icon icon-tabler icons-tabler-outline icon-tabler-clipboard-data">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" />
                <path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                <path d="M9 17v-4" />
                <path d="M12 17v-1" />
                <path d="M15 17v-2" />
                <path d="M12 17v-1" />
              </svg>
              <p>Report</p>
            </span>
          </a>
        </div>

        <div class="flex relative my-1 cursor-pointer">
          <a class='flex relative my-1 w-full' href="coreoperation.php">
            <span class='w-4 rounded-xl absolute -left-2 h-full'>
            </span>
            <p class='ml-8 flex w-full p-1 rounded-xl font-semibold text-[#004369] outline outline-gray-300 outline-1'>
              <span class="flex items-center gap-1 text-lg px-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="icon icon-tabler icons-tabler-outline icon-tabler-chart-bar">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M3 13a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
                  <path d="M15 9a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v10a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
                  <path d="M9 5a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v14a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
                  <path d="M4 20h14" />
                </svg>
                Core Operation
              </span>
            </p>
          </a>
        </div>

        <div class='flex relative my-1 cursor-pointer'>
          <a class='ml-8 flex p-1 w-full rounded-xl mr-4' href="drivermanagement.php">
            <span class='flex items-center gap-1 px-1'>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"
                class="icon icon-tabler icons-tabler-filled icon-tabler-layout-dashboard">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path
                  d="M9 3a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-4a2 2 0 0 1 -2 -2v-6a2 2 0 0 1 2 -2zm0 12a2 2 0 0 1 2 2v2a2 2 0 0 1 -2 2h-4a2 2 0 0 1 -2 -2v-2a2 2 0 0 1 2 -2zm10 -4a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-4a2 2 0 0 1 -2 -2v-6a2 2 0 0 1 2 -2zm0 -8a2 2 0 0 1 2 2v2a2 2 0 0 1 -2 2h-4a2 2 0 0 1 -2 -2v-2a2 2 0 0 1 2 -2z" />
              </svg>
              <p class="text-nowrap">Driver Management</p>
            </span>
          </a>
        </div>

        <div class='flex relative my-1 cursor-pointer'>
          <a class='ml-8 flex p-1 w-full rounded-xl mr-4' href="fleetmanagement.php">
            <span class='flex items-center gap-1 px-1'>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="icon icon-tabler icons-tabler-outline icon-tabler-clipboard-data">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" />
                <path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                <path d="M9 17v-4" />
                <path d="M12 17v-1" />
                <path d="M15 17v-2" />
                <path d="M12 17v-1" />
              </svg>
              <p class="text-nowrap">Fleet Management</p>
            </span>
          </a>
        </div>
      </div>
    </aside>
    <div class='flex flex-col w-full h-screen overflow-y-scroll'>
      <nav
        class='md:sticky block md:w-auto top-4 z-10 bg-white-10/50 backdrop-blur-sm border border-gray-300 rounded-md m-4'>
        <div class="flex w-full">
          <div class="-me-2 flex items-center sm:hidden">
            <button
              class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
            </button>
          </div>
          <div class="relative flex justify-between w-full">
            <div class="mx-4 my-4 font-medium text-3xl">Analytics</div>
            <button type="button"
              class="inline-flex items-center px-3 py-2 font-medium transition ease-in-out duration-150">
              John Doe
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"
                class="icon icon-tabler icons-tabler-filled icon-tabler-caret-down">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path
                  d="M18 9c.852 0 1.297 .986 .783 1.623l-.076 .084l-6 6a1 1 0 0 1 -1.32 .083l-.094 -.083l-6 -6l-.083 -.094l-.054 -.077l-.054 -.096l-.017 -.036l-.027 -.067l-.032 -.108l-.01 -.053l-.01 -.06l-.004 -.057v-.118l.005 -.058l.009 -.06l.01 -.052l.032 -.108l.027 -.067l.07 -.132l.065 -.09l.073 -.081l.094 -.083l.077 -.054l.096 -.054l.036 -.017l.067 -.027l.108 -.032l.053 -.01l.06 -.01l.057 -.004l12.059 -.002z" />
              </svg>
            </button>
          </div>
        </div>
      </nav>


      <!-- DITO KAYO MAG BAGO NG CONTENT -->

      <main class="mx-4 mb-4 mt-24 md:mt-0 flex flex-col gap-4">

        <div class="flex gap-4 w-full">
          <div class="bg-gray-200 w-96 h-60 rounded-md shadow animate-pulse"></div>
          <div class="bg-gray-200 w-96 h-60 rounded-md shadow animate-pulse"></div>

          <div class="flex-1 flex flex-col gap-4">
            <div class="bg-gray-300 w-auto h-28 rounded-md shadow animate-pulse"></div>
            <div class="bg-gray-300 w-auto h-28 rounded-md shadow animate-pulse"></div>
          </div>
        </div>

        <di class="flex mt-4 w-full gap-4">
          <div class="bg-gray-200 w-3/4 h-72 rounded-md shadow animate-pulse"></div>
          <div class="bg-gray-200 flex-1 w-auto h-72 rounded-md shadow animate-pulse"></div>
        </di>

        <div class="w-full flex gap-4">
          <div class="bg-gray-200 flex-1 w-auto h-60 rounded-md shadow animate-pulse"></div>
          <div class="bg-gray-200 flex-1 w-auto h-60 rounded-md shadow animate-pulse"></div>
        </div>



        <!-- NEW PAGE -->
        



      </main>
    </div>

  </div>

</body>

</html>