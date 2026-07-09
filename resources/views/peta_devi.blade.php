<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Peta Wilayah Kerja PHR Zona 1</title>
<script src="https://cdn.tailwindcss.com"></script>
<style>
  .prov { cursor: pointer; stroke: #ffffff; stroke-width: 1; transition: opacity .15s; }
  .prov:hover { opacity: .8; }
  .prov.active { stroke: #003399; stroke-width: 2; }
  .prov-label { font-size: 10px; font-weight: 600; fill: #ffffff; pointer-events: none; text-anchor: middle; }

  /* Modal */
  #modal-overlay {
    position: fixed;
    inset: 0;
    background: rgba(15, 23, 42, .55);
    display: none;
    align-items: center;
    justify-content: center;
    z-index: 100;
    padding: 1rem;
  }
  #modal-overlay.show { display: flex; }
  .point { cursor: pointer; }
  .point circle { fill: #fbbf24; stroke: #92400e; stroke-width: 1; }
  .point:hover circle { fill: #f59e0b; }

  .callout { pointer-events: none; opacity: 0; transition: opacity .15s; }
  .callout.show { opacity: 1; }
  .callout rect { rx: 4; }
  .callout text { font-size: 9px; fill: #fff; font-weight: 600; }
  .callout line { stroke: #64748b; stroke-width: 1; }
</style>
</head>
<body class="bg-slate-100 h-screen flex flex-col p-6">

  <h1 class="text-2xl font-bold text-blue-900 mb-4 text-center">Peta Wilayah Kerja PHR Zona 1</h1>

  {{-- PETA --}}
  <div class="bg-white rounded-xl shadow-lg border border-slate-300 p-4 relative flex-1 w-full flex items-center justify-center overflow-hidden">

    <svg width="auto" height="100%" viewBox="0 0 460 413" role="img" style="max-width:100%;"> 
      <title>Peta provinsi Sumatra</title>
      <desc>Sembilan provinsi di pulau Sumatra, dapat di-hover untuk melihat opsi detail wilayah kerja</desc>

      <path class="prov" fill="#8BC53F" data-p="ID-RI" data-nama="Riau" d="M 183.9,120.5 L 184.9,125.1 L 191.4,132.4 L 198.8,135.5 L 201.6,136.3 L 197.9,130.3 L 199.1,128.9 L 207.3,128.5 L 210.7,133.2 L 215.7,137.8 L 217.0,143.3 L 217.1,145.3 L 220.8,147.8 L 224.9,149.2 L 229.8,148.5 L 239.1,156.0 L 242.3,157.6 L 242.7,162.3 L 243.6,166.5 L 247.9,172.5 L 253.5,177.7 L 259.9,177.7 L 262.3,178.5 L 266.8,179.0 L 271.4,185.0 L 275.5,187.1 L 279.2,185.6 L 280.3,184.4 L 285.7,187.5 L 289.2,190.8 L 293.1,193.0 L 294.6,198.5 L 295.6,202.1 L 288.9,202.7 L 288.7,205.2 L 285.9,208.0 L 289.8,209.4 L 294.7,213.0 L 292.1,213.3 L 289.0,216.1 L 283.5,218.8 L 282.7,225.5 L 285.3,226.8 L 280.8,227.3 L 270.1,226.3 L 263.6,233.1 L 259.7,236.7 L 257.5,237.2 L 253.5,236.9 L 250.3,235.2 L 248.0,232.9 L 245.8,231.7 L 242.8,230.9 L 241.4,231.7 L 237.1,230.3 L 232.6,233.6 L 229.5,233.2 L 224.6,229.4 L 218.5,225.7 L 217.0,223.2 L 211.3,219.7 L 206.2,214.8 L 205.3,212.1 L 202.5,213.9 L 200.1,212.3 L 198.4,209.4 L 198.0,203.1 L 198.7,198.1 L 196.7,195.8 L 195.4,196.3 L 188.2,194.9 L 186.0,191.1 L 182.3,191.3 L 180.3,185.1 L 181.5,179.2 L 179.2,177.5 L 177.5,173.3 L 177.7,171.5 L 176.8,167.5 L 177.5,164.2 L 177.2,161.6 L 175.8,157.4 L 182.1,156.3 L 186.4,154.7 L 186.6,152.6 L 187.9,149.6 L 182.7,144.0 L 183.6,140.3 L 184.8,130.6 L 183.0,124.4 L 183.9,120.5 Z" />
      <path class="prov" fill="#F6A623" data-p="ID-SU" data-nama="Sumatera Utara" d="M 117.1,64.0 L 117.0,66.8 L 114.4,69.8 L 117.7,69.5 L 118.8,71.0 L 122.9,72.1 L 126.9,75.3 L 130.6,76.3 L 131.4,77.4 L 134.3,82.4 L 143.5,85.8 L 147.7,88.3 L 149.9,90.3 L 156.7,94.3 L 158.7,97.6 L 164.8,100.0 L 167.7,103.4 L 173.2,107.5 L 173.3,111.9 L 173.5,114.4 L 175.2,114.1 L 177.7,116.0 L 180.4,115.0 L 183.9,120.5 L 183.0,124.4 L 184.8,130.6 L 183.6,140.3 L 182.7,144.0 L 186.4,144.8 L 186.6,152.6 L 186.4,154.7 L 182.1,156.3 L 181.1,157.2 L 176.0,159.0 L 177.5,164.2 L 176.8,167.5 L 178.4,169.9 L 176.2,172.6 L 177.8,176.4 L 175.9,176.5 L 171.9,173.9 L 168.0,173.4 L 168.3,179.9 L 170.7,182.5 L 172.1,184.2 L 167.6,187.2 L 164.1,187.4 L 162.7,186.5 L 160.0,185.4 L 154.2,186.1 L 150.6,191.2 L 148.7,191.5 L 146.0,192.1 L 145.4,188.0 L 143.4,181.8 L 142.9,178.6 L 140.8,175.5 L 138.7,168.5 L 135.9,160.6 L 136.1,159.1 L 133.4,152.8 L 136.0,149.6 L 134.6,147.8 L 133.7,145.4 L 130.8,146.0 L 125.0,139.6 L 121.4,137.4 L 119.8,136.2 L 116.1,134.6 L 114.9,127.4 L 112.5,124.0 L 112.4,122.5 L 111.3,119.2 L 112.9,116.6 L 111.7,111.2 L 110.3,111.0 L 107.4,108.7 L 107.0,103.2 L 108.2,101.4 L 107.1,100.2 L 104.8,97.5 L 109.9,94.9 L 107.3,92.9 L 105.9,87.7 L 103.9,84.2 L 106.0,79.1 L 107.1,76.6 L 107.6,75.6 L 110.8,67.2 L 113.6,64.1 L 117.1,64.0 Z" />
      <path class="prov" fill="#D85A30" data-p="ID-SB" data-nama="Sumatera Barat" d="M 146.3,194.6 L 148.7,191.5 L 150.6,191.2 L 154.2,186.1 L 157.2,184.7 L 161.7,184.4 L 162.7,186.5 L 165.7,186.5 L 167.6,187.2 L 170.3,186.7 L 170.7,182.5 L 170.5,180.1 L 168.3,175.0 L 168.0,173.4 L 171.9,173.9 L 175.9,176.5 L 179.2,177.5 L 179.9,182.9 L 180.3,185.1 L 182.3,191.3 L 184.9,190.6 L 187.3,194.0 L 188.2,194.9 L 192.7,196.1 L 196.7,195.8 L 198.3,196.6 L 197.5,200.5 L 198.0,203.1 L 198.4,209.4 L 200.2,211.4 L 200.1,212.3 L 203.5,212.1 L 205.3,212.1 L 206.2,214.8 L 207.6,218.0 L 213.7,222.2 L 217.0,223.2 L 221.5,228.0 L 224.6,229.4 L 226.5,232.1 L 231.9,233.5 L 232.1,237.5 L 233.1,239.3 L 231.7,240.9 L 227.6,243.7 L 228.6,245.3 L 227.7,247.0 L 227.8,249.7 L 223.7,252.6 L 221.3,256.1 L 219.3,256.6 L 215.7,256.5 L 213.7,256.5 L 212.4,257.2 L 209.5,256.0 L 209.4,259.4 L 211.7,266.0 L 213.3,267.1 L 215.3,274.1 L 214.9,275.4 L 213.3,277.5 L 206.3,281.9 L 205.2,280.3 L 201.5,274.3 L 200.0,272.4 L 201.2,269.7 L 201.7,267.7 L 198.4,260.6 L 195.3,255.5 L 193.9,254.1 L 191.1,247.2 L 191.8,246.3 L 189.1,243.8 L 188.0,242.6 L 186.7,240.6 L 185.6,239.9 L 186.5,235.4 L 184.3,230.4 L 181.9,227.2 L 175.9,219.7 L 172.3,216.3 L 169.6,213.3 L 167.5,211.9 L 167.0,209.9 L 165.7,204.1 L 164.7,202.9 L 156.3,197.7 L 153.8,197.1 L 151.1,194.3 L 149.2,195.2 L 146.3,194.6 Z" />
      <path class="prov" fill="#F5B6D2" data-p="ID-SS" data-nama="Sumatera Selatan" d="M 359.4,334.5 L 356.8,333.9 L 353.7,328.8 L 348.0,325.1 L 345.5,324.1 L 343.5,325.6 L 340.6,327.2 L 337.8,330.7 L 336.2,334.6 L 328.2,338.5 L 325.7,338.8 L 323.0,338.8 L 312.6,344.4 L 312.7,350.4 L 312.4,356.7 L 313.1,357.2 L 313.2,358.2 L 311.9,359.2 L 307.1,360.4 L 302.6,359.8 L 300.5,359.8 L 297.6,360.3 L 296.3,356.5 L 294.3,354.6 L 292.1,351.7 L 288.8,347.6 L 285.1,348.9 L 283.6,343.8 L 280.4,340.1 L 276.2,338.7 L 273.9,331.5 L 267.0,329.8 L 261.6,327.3 L 258.1,324.7 L 261.3,321.1 L 263.7,318.1 L 264.9,315.8 L 269.2,315.5 L 269.4,310.5 L 263.9,309.3 L 261.5,308.7 L 256.8,309.3 L 253.4,306.4 L 250.2,300.0 L 245.6,299.4 L 241.9,294.5 L 239.9,291.5 L 241.6,289.8 L 246.6,286.2 L 250.1,287.2 L 254.3,288.2 L 258.2,286.0 L 263.1,282.6 L 264.6,277.9 L 269.3,277.3 L 273.8,277.9 L 276.0,274.6 L 278.6,271.3 L 282.4,275.9 L 284.8,274.4 L 284.4,272.1 L 287.5,268.0 L 284.0,263.6 L 289.0,260.4 L 297.6,260.1 L 301.3,260.2 L 310.7,258.1 L 313.3,258.1 L 318.5,256.0 L 319.2,259.8 L 318.7,264.0 L 322.9,263.6 L 329.2,266.6 L 331.2,271.1 L 329.4,275.6 L 334.1,277.2 L 341.5,277.1 L 351.2,279.1 L 353.9,278.9 L 354.5,287.1 L 358.5,288.5 L 360.2,295.8 L 366.5,297.4 L 368.1,300.9 L 368.8,306.6 L 363.5,310.9 L 360.7,321.5 L 364.9,325.9 L 360.6,336.1 L 360.3,335.6 L 359.4,334.5 Z" />
      <path class="prov" fill="#138A9E" data-p="ID-JA" data-nama="Jambi" d="M 214.9,275.4 L 215.3,274.1 L 213.3,267.1 L 211.7,266.0 L 209.4,259.4 L 209.5,256.0 L 212.4,257.2 L 213.7,256.5 L 218.8,255.8 L 219.3,256.6 L 222.4,254.0 L 223.7,252.6 L 228.6,247.7 L 227.7,247.0 L 227.6,243.7 L 228.3,241.8 L 233.1,239.3 L 233.7,237.7 L 231.9,233.5 L 232.6,233.6 L 237.1,230.3 L 239.5,230.7 L 242.8,230.9 L 245.8,231.7 L 247.4,231.5 L 250.0,234.0 L 250.3,235.2 L 253.5,236.9 L 257.5,237.2 L 259.7,236.7 L 262.7,235.0 L 266.7,230.8 L 270.1,226.3 L 280.8,227.3 L 285.3,226.8 L 287.3,228.2 L 287.5,229.6 L 291.3,232.7 L 292.8,232.8 L 297.8,234.2 L 299.4,233.8 L 306.1,235.8 L 308.7,236.5 L 312.8,235.6 L 313.9,234.9 L 314.9,241.6 L 316.9,247.1 L 316.3,249.3 L 318.5,256.0 L 315.4,254.4 L 313.3,258.1 L 311.6,259.1 L 305.5,259.5 L 304.3,260.1 L 299.6,258.3 L 297.6,260.1 L 289.0,260.4 L 287.6,262.9 L 284.0,263.6 L 287.9,266.4 L 286.3,269.1 L 286.7,271.7 L 284.0,273.2 L 284.8,274.4 L 283.0,277.1 L 282.4,275.9 L 278.6,271.3 L 276.8,271.9 L 276.0,274.6 L 273.8,277.9 L 271.5,276.4 L 269.3,277.3 L 265.9,276.2 L 265.8,279.5 L 263.1,282.6 L 261.3,285.0 L 258.2,286.0 L 254.3,288.2 L 253.4,289.0 L 250.1,287.2 L 248.3,287.5 L 245.7,286.7 L 245.2,288.5 L 239.8,291.0 L 237.3,289.6 L 233.4,289.8 L 229.0,285.9 L 224.8,283.7 L 223.0,284.4 L 216.1,276.3 L 214.9,275.4 Z" />
      <path class="prov" fill="#7A7A7A" data-p="ID-LA" data-nama="Lampung" d="M 294.8,356.3 L 294.8,356.3 L 297.6,358.0 L 297.6,360.3 L 300.5,359.8 L 300.5,359.8 L 302.6,359.8 L 303.9,359.5 L 307.1,360.4 L 308.1,358.6 L 312.0,359.2 L 313.2,358.2 L 313.2,357.2 L 313.1,357.2 L 312.4,356.7 L 311.7,355.3 L 312.7,350.4 L 312.0,347.5 L 316.4,340.3 L 321.3,338.2 L 325.6,338.8 L 325.7,338.8 L 328.2,338.5 L 334.5,336.3 L 336.2,334.6 L 337.8,330.7 L 338.4,330.4 L 340.6,327.2 L 342.0,327.8 L 343.2,324.2 L 345.1,322.0 L 347.5,323.5 L 348.0,325.1 L 350.6,326.6 L 353.7,328.8 L 356.8,333.9 L 357.8,335.3 L 359.6,334.5 L 360.3,335.6 L 360.6,336.1 L 360.4,340.9 L 363.0,345.7 L 363.2,348.2 L 363.5,351.5 L 362.4,353.1 L 362.1,358.9 L 362.0,362.4 L 361.7,365.4 L 360.5,373.7 L 360.6,382.0 L 359.5,386.1 L 359.6,388.2 L 357.0,390.5 L 353.6,389.6 L 353.0,386.8 L 351.9,385.3 L 346.0,380.6 L 343.5,377.2 L 342.7,379.5 L 342.0,381.8 L 339.9,384.4 L 340.4,385.6 L 340.1,388.8 L 338.9,389.0 L 331.8,385.3 L 328.5,382.9 L 324.8,379.7 L 321.1,378.9 L 320.3,382.5 L 322.7,387.0 L 324.8,390.1 L 325.2,392.9 L 321.0,393.1 L 316.5,387.5 L 315.2,385.6 L 312.2,382.5 L 311.5,381.4 L 305.8,377.6 L 301.9,373.3 L 298.9,369.6 L 299.8,368.4 L 297.6,366.4 L 296.7,365.0 L 292.8,361.9 L 290.9,361.4 L 289.2,359.5 L 291.0,358.4 L 292.9,356.5 L 293.8,356.4 L 294.7,356.4 L 294.8,356.3 Z" />
      <path class="prov" fill="#7D3F98" data-p="ID-BE" data-nama="Bengkulu" d="M 294.8,356.3 L 294.8,356.3 L 294.7,356.4 L 294.6,356.6 L 292.9,356.5 L 291.1,358.3 L 291.0,358.4 L 289.2,359.5 L 287.0,360.1 L 285.9,358.9 L 283.6,358.8 L 282.7,357.0 L 278.7,353.4 L 277.6,352.4 L 273.4,349.3 L 271.1,348.1 L 266.0,344.9 L 263.1,342.1 L 259.9,339.5 L 248.8,331.3 L 247.5,327.5 L 247.3,325.6 L 245.8,324.2 L 246.2,323.1 L 240.4,316.3 L 235.5,313.9 L 234.4,312.2 L 231.2,310.5 L 222.3,302.2 L 221.1,299.3 L 218.5,296.2 L 215.9,290.1 L 210.4,286.9 L 206.3,281.9 L 210.4,278.9 L 213.3,277.5 L 216.1,276.3 L 223.4,280.9 L 223.0,284.4 L 224.8,283.7 L 229.0,285.9 L 233.4,289.8 L 234.9,290.1 L 237.3,289.6 L 239.9,291.5 L 239.9,291.5 L 241.7,293.2 L 244.8,296.3 L 245.6,299.4 L 248.0,300.7 L 250.2,300.0 L 253.2,302.0 L 253.4,306.4 L 254.1,307.4 L 256.8,309.3 L 259.7,308.8 L 261.5,308.7 L 262.5,307.6 L 263.9,309.3 L 266.2,310.6 L 269.4,310.5 L 269.7,313.6 L 269.2,315.5 L 267.3,317.6 L 264.9,315.8 L 263.8,315.7 L 263.7,318.1 L 261.3,321.1 L 261.0,322.7 L 258.7,323.4 L 258.1,324.7 L 261.6,327.3 L 263.1,329.3 L 266.1,330.4 L 267.0,329.8 L 273.9,331.5 L 274.8,334.3 L 275.8,336.0 L 276.2,338.7 L 280.4,340.1 L 284.4,341.4 L 284.9,341.9 L 283.6,343.8 L 285.1,348.9 L 286.5,349.2 L 288.8,347.6 L 290.1,348.6 L 292.1,351.7 L 292.5,353.2 L 294.3,354.6 L 294.8,356.3 Z" />
      <path class="prov" fill="#F48B74" data-p="ID-AC" data-nama="Aceh" d="M 117.1,64.0 L 113.6,64.1 L 111.8,67.0 L 109.7,74.3 L 107.6,75.6 L 105.7,76.8 L 106.0,79.1 L 103.9,84.2 L 104.7,87.1 L 107.3,92.9 L 109.0,93.6 L 108.4,96.6 L 104.8,97.5 L 106.5,98.2 L 108.2,101.4 L 108.4,102.8 L 107.6,106.7 L 107.4,108.7 L 110.3,111.0 L 111.7,111.2 L 112.9,116.6 L 111.6,117.3 L 111.6,121.3 L 112.4,122.5 L 112.5,124.0 L 114.9,127.4 L 113.8,133.0 L 107.3,129.0 L 104.0,129.7 L 102.0,130.1 L 98.0,124.7 L 96.5,110.9 L 95.4,109.0 L 92.5,108.0 L 91.1,107.9 L 89.3,106.6 L 85.3,98.7 L 83.0,97.2 L 80.7,94.3 L 79.5,92.8 L 73.7,86.2 L 72.4,83.2 L 66.1,81.5 L 61.5,81.9 L 56.1,77.0 L 53.8,73.6 L 51.3,70.5 L 48.6,69.0 L 46.3,66.7 L 40.8,61.7 L 38.3,59.4 L 31.5,53.2 L 30.1,52.3 L 28.2,49.2 L 26.0,47.0 L 22.0,37.4 L 22.3,35.9 L 21.0,34.8 L 20.5,29.3 L 20.2,26.3 L 20.0,23.2 L 21.0,23.4 L 23.9,21.9 L 26.6,20.0 L 31.9,20.9 L 34.4,22.3 L 41.0,25.1 L 41.5,26.9 L 42.8,28.2 L 47.3,31.9 L 50.6,32.8 L 57.2,34.4 L 59.4,33.6 L 65.0,34.4 L 67.6,33.4 L 73.9,33.1 L 77.1,32.8 L 81.8,36.4 L 82.9,36.6 L 90.5,34.0 L 94.5,34.3 L 95.3,35.7 L 103.2,43.7 L 105.7,44.8 L 107.6,51.7 L 109.3,53.5 L 108.7,56.3 L 111.7,56.5 L 118.1,59.9 L 118.0,62.1 L 117.1,64.0 Z" />

      <text class="prov-label" x="79.3" y="70.5">Aceh</text>
      <text class="prov-label" x="144.0" y="128.6">Sumut</text>
      <text class="prov-label" x="191.9" y="222.5">Sumbar</text>
      <text class="prov-label" x="228.7" y="184.9">Riau</text>
      <text class="prov-label" x="261.7" y="257.5">Jambi</text>
      <text class="prov-label" x="259.9" y="322.8">Bengkulu</text>
      <text class="prov-label" x="304.3" y="308.8">Sumsel</text>
      <text class="prov-label" x="327.9" y="360.5">Lampung</text>

      < id="titik-wk">
      <g class="point" data-nama="PHE-NSO - 1998" data-color="#2f8f8f" data-side="right" data-p="ID-SU"><circle cx="93" cy="45" r="3" /></g>
      <g class="point" data-nama="Rantau - 1929" data-color="#1e3a5f" data-side="right" data-p="ID-SU"><circle cx="112" cy="75" r="3" /></g>
      <g class="point" data-nama="Pangkalan Susu - 1885" data-color="#1e3a5f" data-side="left" data-p="ID-SU"><circle cx="128" cy="88" r="3" /></g>
      <g class="point" data-nama="Lirik - 1940" data-color="#1e3a5f" data-side="right" data-p="ID-RI"><circle cx="255" cy="210" r="3" /></g>
      <g class="point" data-nama="Jambi - 1922" data-color="#1e3a5f" data-side="right" data-p="ID-JA"><circle cx="285" cy="248" r="3" /></g>
      <g class="point" data-nama="PHE-Jambi Merang - 2011" data-color="#2f8f8f" data-side="right" data-p="ID-SS"><circle cx="298" cy="275" r="3" /></g>

      <g class="callout" id="callout">
      <line id="callout-line" x1="0" y1="0" x2="0" y2="0" />
      <rect id="callout-rect" x="0" y="0" width="0" height="18" />
      <text id="callout-text" x="0" y="0"></text>
      </g>
    </svg>
  </div>

  {{-- MODAL --}}
  <div id="modal-overlay">
    <div class="bg-white rounded-xl shadow-2xl w-full max-w-2xl max-h-[85vh] overflow-y-auto p-6 relative">
      <button id="btn-close-modal" class="absolute top-4 right-4 text-slate-400 hover:text-slate-700 text-xl leading-none">✕</button>
      <h2 id="modal-title" class="text-xl font-bold text-blue-900 mb-4"></h2>
      <div id="modal-body" class="space-y-2 text-sm text-slate-700"></div>
    </div>
  </div>

<script>
const modalOverlay = document.getElementById('modal-overlay');
const modalTitle = document.getElementById('modal-title');
const modalBody = document.getElementById('modal-body');
const btnCloseModal = document.getElementById('btn-close-modal');

document.querySelectorAll('.prov').forEach(el => {
  el.addEventListener('click', () => {
    document.querySelectorAll('.prov').forEach(p => p.classList.remove('active'));
    el.classList.add('active');
  });
});

function openModal(kode, namaProvinsi) {
  modalTitle.textContent = namaProvinsi;
  modalBody.innerHTML = '<p class="text-slate-400">Memuat data...</p>';
  modalOverlay.classList.add('show');

  fetch(`/api/wilayah-kerja/${kode}`)
    .then(res => res.json())
    .then(res => {
      if (!res.found) {
        modalBody.innerHTML = `<p class="text-slate-400 italic">${res.message}</p>`;
        return;
      }
      const d = res.data;
      modalBody.innerHTML = `
        <p><span class="font-semibold">Cakupan Lokasi:</span> ${d.cakupan_lokasi ?? '-'}</p>
        <p><span class="font-semibold">Wilayah Kerja Operator:</span> ${d.wilayah_kerja_operator ?? '-'}</p>
        <p><span class="font-semibold">Program Kerja:</span> ${d.program_kerja ?? '-'}</p>
        <p><span class="font-semibold">Rig Pemboran / WOWS:</span> ${d.rig_pemboran ?? '-'} / ${d.rig_wows ?? '-'}</p>
        <hr class="my-2">
        <p class="font-semibold text-blue-900">Produksi (${d.tanggal_produksi ?? '-'})</p>
        <p>Oil: ${d.produksi_oil_bopd ?? '-'} BOPD</p>
        <p>Gas: ${d.produksi_gas_mmscfd ?? '-'} MMSCFD</p>
        <hr class="my-2">
        <p class="font-semibold text-blue-900">Fasilitas Produksi</p>
        <p>Struktur: ${d.jumlah_struktur ?? '-'} | Stasiun Pengumpul: ${d.stasiun_pengumpul ?? '-'}</p>
      `;
    })
    .catch(() => {
      modalBody.innerHTML = '<p class="text-red-400 italic">Gagal memuat data. Cek koneksi API.</p>';
    });
}

btnCloseModal.addEventListener('click', () => modalOverlay.classList.remove('show'));
modalOverlay.addEventListener('click', (e) => {
  if (e.target === modalOverlay) modalOverlay.classList.remove('show');
});
document.addEventListener('keydown', (e) => {
  if (e.key === 'Escape') modalOverlay.classList.remove('show');
});

const callout = document.getElementById('callout');
const calloutLine = document.getElementById('callout-line');
const calloutRect = document.getElementById('callout-rect');
const calloutText = document.getElementById('callout-text');

document.querySelectorAll('.point').forEach(el => {
  const circle = el.querySelector('circle');
  const cx = parseFloat(circle.getAttribute('cx'));
  const cy = parseFloat(circle.getAttribute('cy'));
  const side = el.dataset.side || 'right';
  const color = el.dataset.color || '#1e3a5f';
  const label = el.dataset.nama;

  el.addEventListener('mouseenter', () => {
    calloutText.textContent = label;
    calloutRect.setAttribute('fill', color);
    calloutLine.setAttribute('x1', cx);
    calloutLine.setAttribute('y1', cy);
    callout.classList.add('show');

    requestAnimationFrame(() => {
      const bbox = calloutText.getBBox();
      const padX = 8;
      const boxW = bbox.width + padX * 2;
      const boxH = 18;
      const offsetX = side === 'right' ? 25 : -(boxW + 25);
      const boxX = cx + offsetX;
      const boxY = cy - boxH / 2;

      calloutRect.setAttribute('x', boxX);
      calloutRect.setAttribute('y', boxY);
      calloutRect.setAttribute('width', boxW);
      calloutRect.setAttribute('height', boxH);

      calloutText.setAttribute('x', boxX + padX);
      calloutText.setAttribute('y', boxY + boxH / 2 + 3);

      calloutLine.setAttribute('x2', side === 'right' ? boxX : boxX + boxW);
      calloutLine.setAttribute('y2', cy);
    });
  });

  el.addEventListener('mouseleave', () => {
    callout.classList.remove('show');
  });

  el.addEventListener('click', () => {
  callout.classList.remove('show');
  openModal(el.dataset.p, label);
  });
});
</script>
</body>
</html>