<div id='mint'>
    <!-- External Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ethers/5.7.0/ethers.umd.min.js" integrity="sha512-+Ftowzj6zmwHlez4gpQxd7QQUzK/ocgu10pukN3Pyqblni7yJ9r/WTpNHoYKL4DGOp5givxSUZjJcVY7Az9OAQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="/mint/css/mint.css">
    <script src='/mint/scripts/mint.js' type='module' defer></script>
    <div class='card'>
        <h2>Mint Details:</h2>
        <p>Max Mint: 10</p>
        <p>Mint Price: .002 Ether</p>
        <p>Free Mint: First 5</p>
        <div class='textcenter'><small><i>Mint With MetaMask</i></small></div>
    </div>
    <form id='mint-input' name='mint-input' onsubmit='return false'>
        <label for='quantity'>Quantity</label>
        <input name='quantity' type='number' min='1' max='10' value='4' required></input>
        <label for='amount'>Amount</label>
        <input name='amount' type='number' step='.002' min='0' max='10' value='0' required></input>
        <button id='mint-button' type='submit'>Mint</button>
    </form>

</div>