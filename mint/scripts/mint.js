$(document).ready(async () => {
    $('#mint-button').click(async () => {

        const quantity = $('input[name="quantity"]')[0].value
        const amount = $('input[name="amount"]')[0].value

        if (!(parseInt(quantity) > 0 && parseInt(quantity) <= 10 && quantity != undefined)) {
            return;
        }

        const connected = await Connect();
        if (connected) {
            await Mint(quantity, amount)
        } else {
            window.open("https://metamask.io/download/", "_blank");
        }
    })
})

async function Connect() {
    if (window.ethereum.isMetaMask) {
        // Connect
        await window.ethereum.request({method: 'eth_requestAccounts'});
        return true
    }
    return false
}


async function Mint(quantity, amount) {
    const provider = new ethers.providers.Web3Provider(window.ethereum)
    const signer = provider.getSigner()
    const contract = new ethers.Contract(address, abi, signer);

    // console.log(await contract.totalSupply())
    const nftTxn = await contract.mint(quantity, {value: ethers.utils.parseEther(amount.toString())})
                                 .catch(err => console.log(err))

    try {
        const r = await nftTxn.wait()

        console.log(r)
    } catch (err) {console.log(err)}

}

// Contract Info
// Beta
const address = ''
const abi = []