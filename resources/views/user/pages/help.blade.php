@extends('user.index')
@section('content')
    <!-- Breadcrumb Area Start -->
    <section class="breadcrumb-area help">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h2>About</h2>
					<!-- <ul class="breadcrumb-list">
						<li>
							<a href="#">Home</a>
						</li>
						<li>
							<a href="#">Pages</a>
						</li>
						<li>
							<a href="#">Help</a>
						</li>
					</ul> -->
				</div>
			</div>
		</div>
	</section>
	<!-- Breadcrumb Area End -->

    <!-- Help Section Start -->
	<section class="help-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<aside>
						<ul>
							<li>
								<a href="{{url('/about')}}" class="active"><i class="fas fa-chevron-right"></i>What is Lambswap?</a>
							</li>
						</ul>
					</aside>
				</div>
				<div class="col-lg-8">
					<div class="help-content">
						<h2 class="heading-title">
                            What is Lambswap?
						</h2>
						<div class="h-inner-content">
							<h4 class="content-title">DEX Aggregator Protocol</h4>
                            <p>
                            LambSwap is a proprietary cross-chain aggregation protocol.
                            The mission of LambSwap is to provide consumers access to cryptocurrency-based, financial services,
                            allowing them to exchange, or ‘swap’. The benefits of this design can be attributed to the high level of safety and security that is
                            inherent to the decentralized model of asset storage and protection. The platform also provides ‘cross-chain’ swaps to conduct exchange
                            settlements without regard to the limitations of a typical isolated Blockchain network. The term ‘cross-chain’ derives itself from the fact
                            that the exchange is executed after traveling across two or more separate blockchain networks. With a cross-chain swap, the initial asset and
                             the target asset are deployed on two isolated Blockchains that otherwise are non-communicative. In light of the advanced development of decentralized
                             financial protocols (DeFi) and the increasingly mature markets for lending, exchange, derivatives, etc., The LambSwap protocol, in cooperation with its
                             associated decentralized wallet software, provides a one-stop aggregation & exchange platform for
                            consumers and offers developers access to an open, distributed, limitless, and secure — trading environment.
                            </p>
						</div>
                        <div class="h-inner-content">
							<h4 class="content-title">Mission</h4>
                            <p>
                            DeFi innovation has brought many practical applications to the industry and has promoted the development of
                            open finance. The decentralized exchange (DEX) is a notable example that has gradually been recognized by the market
                            following a surge of growth and consumer participation. The Ethereum DeFi projects’ total value of locked assets is over
                            60 billion USD (DeBank data). However, network congestion and poor scalability have caused unprecedentedly high network transaction fees.
                            This problem is urgent and caused significant financial detriment for many. The problem la
                            </p>
						</div>
                        <div class="h-inner-content">
							<h4 class="content-title">Supported 9Blockchains</h4>
                            <ul>
                                <li>
                                    <p>1. Ethereum Blockchain</p>
                                </li>
                                <li>
                                    <p>2. Binance Blockchain</p>
                                </li>
                                <li>
                                    <p>3. Solana Blockchain</p>
                                </li>
                                <li>
                                    <p>4. Polygon Blockchain</p>
                                </li>
                                <li>
                                    <p>5. Fantom Blockchain</p>
                                </li>
                                <li>
                                    <p>6. Avalanche Blockchain</p>
                                </li>
                                <li>
                                    <p>7. OKEX Blockchain</p>
                                </li>
                                <li>
                                    <p>8. Arbitrum Blockchain</p>
                                </li>
                                <li>
                                    <p>9. Optimisism Blockchain</p>
                                </li>
                            </ul>
						</div>
                        <div class="h-inner-content">
							<h4 class="content-title">Features</h4>
                            <ul>
                                <li>
                                    <p>1. <span style="font-weight: bold">Permissionless,</span>
                                    Anti-censorship: In any environment, anyone can access LambSwap without permission and KYC review.</p>
                                </li>
                                <li>
                                    <p>2. <span style="font-weight: bold">Liquidity Aggregation:</span>
                                    Users can exchange assets at the lowest rate and via the most efficient trading route — this is achieved by connecting their own decentralized wallets.</p>
                                </li>
                                <li>
                                    <p>3. <span style="font-weight: bold">Cross-chain Exchange: </span>
                                    We implement all proven and possible cross-chain solutions onto the market with our aggregation protocol. With this, we can achieve cross-chain transactions. Users are able to freely exchange multi-chain assets with one-click.</p>
                                </li>
                                <li>
                                    <p>4. <span style="font-weight: bold">Community Drive: </span>
                                    Based on the LambSwap Token's issuance and economic model, decentralized governance and community-driven development will be realized.</p>
                                </li>


                            </ul>
						</div>
                        <div class="h-inner-content">
							<h4 class="content-title">Features</h4>
                            <p>
                            LambSwap uses a four-layer structure to ensure the integrity and symmetry of the information in the liquid market. As a result, the consumer has a safe and efficient trading environment.
                            </p>
                            <ul>
                                <li>
                                    <p>1. <span style="font-weight: bold">Network Layer:</span>
                                    As the basis of the LambSwap cross-chain protocol, we will aggregate high-quality public chains and ecological chain systems in the market. This includes network layer 1 Ethereum, Binance Smart Chain, Solana, Polygon, Fantom, Avalce and OkexChain & network layer 2 : Arbitum and Optimism chain, to provide cross-chain trading.</p>
                                </li>
                                <li>
                                    <p>2. <span style="font-weight: bold">Market Liquidity:</span>
                                    The aggregation of different liquidity sources through LambSwap, allows the platform to identify and recommend the best exchange quote for users.</p>
                                </li>
                                <li>
                                    <p>3. <span style="font-weight: bold">Settlement Layer: </span>
                                    Based on the private key signature authorization, the transaction settlement is completed through the smart contract. Additionally, cross-chain protocols and cross-chain pools will help users complete cross-chain asset exchanges and settlements.</p>
                                </li>
                                <li>
                                    <p>4. <span style="font-weight: bold">Application Layer: </span>
                                    Provide developers with a complete service API to integrate into different applications, and providing users with a convenient and user-friendly operating platform.</p>
                                </li>


                            </ul>
						</div>
                        <div class="h-inner-content">
							<h4 class="content-title">System Design</h4>
                            <p>
                            The main functional modules of LambSwap include the exchange aggregators (Lamb Aggregator)
                            and cross-chain pool (Lamb Hub). LambSwap Aggregators are deployed on mainstream blockchains and help users find the most effective trading rates and routes in the corresponding network. LambSwap Hub provides users with cross-chain transaction services based on PolyNetwork and supports users to add liquidity by a single token from different chains to earn income from cross-chain transaction fees and token rewards.
                            </p>
						</div>
                        <div class="h-inner-content">
							<h4 class="content-title">Features</h4>
                            <ul>
                                <li>
                                    <p><span style="font-weight: bold">Users:</span>
                                    Users connect to Lamb Swap for transacting with their crypto wallet.</p>
                                </li>
                                <li>
                                    <p><span style="font-weight: bold">LambSwap Relayer:</span>
                                    The agent of the user and the contract on the chain. Depending on the different users’ needs, LambSwap relayer can find the best exchange rate through  LambSwap.</p>
                                </li>
                                <li>
                                    <p><span style="font-weight: bold">Swap: </span>
                                    As the core exchange mechanism of the system, it receives users’ requests from the relayer and achieves liquidity settlement by smart contracts.</p>
                                </li>
                                <li>
                                    <p><span style="font-weight: bold">Aggregator:  </span>
                                    Aggregate liquidity sources across blockchains and determine the best trading rates and routes for users.</p>
                                </li>
                                <li>
                                    <p><span style="font-weight: bold">Cross-chain Pool:  </span>
                                    The cross-chain asset transaction pool built based on the PolyNetwork protocol realizes the free exchange of assets across chains.</p>
                                </li>
                                <li>
                                    <p><span style="font-weight: bold"> Liquidity Providers:  </span>
                                    Mainly including the following liquidity sources:</p>
                                    <p><span style="margin-left: 10px; font-weight: bold;"> Automated market makers  </span>
                                    of on-chain algorithms from different DEXs.</p>
                                    <p><span style="margin-left: 10px; font-weight: bold;"> Lp market maker  </span>
                                    who provides liquidity for Cross-chain Pool.</p>
                                </li>


                            </ul>
						</div>
                        <div class="h-inner-content">
							<h4 class="content-title">Cross Chain Liquidity Pools</h4>
                            <p>
                            The LambSwap exchange  composed of a cross-chain asset pool such as stablecoin pool and
                            cross-chain protocol based on Poly Network. With the StableSwap invariant from Curve,
                            the performance of the algorithm was evaluated and optimized assuming providing liquidity for stablecoin.
                            This sort of automated liquidity provider for stablecoin offers very low price slippage and extremely reduces the
                            impermanent loss. On the implementation side, traders can exchange mainstream assets across blockchains simply; Liquidity providers can deposit single or multiple assets to the cross-chain pool and stake the LP shares to earn Token rewards. The advantage of this design is allowing users to exchange cross-chain assets without asset deposit and withdrawal compared to the traditional Hub mechanism,
                            which greatly reduces the threshold for user operations/transactions.
                            </p>
						</div>
                        <div class="h-inner-content">
							<h4 class="content-title">Vault</h4>
                            <p>
                            A vault is essentially an smart contract where users can store their cryptocurrency and get tokens that may be later used as collateral. They work like pools of funds that use particular strategies for maximizing returns on the assets therein. They were created to address the problems of yield farming and liquidity mining by implementing a more complicated approach than simply switching between various lending protocols a great way to earn token rewards on platform (BSC, SOLANA and POLYGON). Unlike Start Pools, Farms require you to stake two tokens to get LP Tokens, which you then stake in the Farm to earn rewards. This lets you earn Token Project while still keeping a position in your other tokens!
                            </p>
						</div>
                        <div class="h-inner-content">
							<h4 class="content-title">Referral Program</h4>
                            <p>
                            LambSwap platform gives you an opportunity to maximize your rewards. Hence, you can invite your friends to register via the referral link and receive rewards from our three-type referral program. Referral rewards can be received from Cross Chain Liquidity Pools and Vault . Swaps referral program will be enabled after deactivation of transaction fee mining.
                            LambSwap referral program will work in the following way:
                            <ul>
                                <li>
                                    <p>1. <span style="font-weight: bold">Exchange.</span>
                                    You can expect a certain commission reward every time your invited friend makes a swap. Referral rewards from exchanges will be sent to your balance immediately after a swap. Referral rewards from exchange transactions will be active for certain pairs.</p>
                                </li>
                                <li>
                                    <p>2. <span style="font-weight: bold">Farms & Launchpools.</span>
                                    You can expect 5% return from your friends' earnings. Your referral rewards will be visible and ready for withdrawal from your referral accounts when your invited friends will withdraw LST tokens to the wall</p>
                                </li>
                            </ul>
                            </p>
						</div>
                        <div class="h-inner-content">
							<h4 class="content-title">Governance / DAO</h4>
                            <p>
                            Community proposal are great way to way to see how the community feels abaout product, project and ideas. They won’t won't necessarily be implemented if the community votes successful, but suggestions with a lot of community support may be made into Core proposals. Voting For: Reward Distribution, An example of Vault design like
                            </p>
						</div>
                        <div class="h-inner-content">
							<h4 class="content-title">Governance / DAO</h4>
                            <p>
                            IDO refers to Initial DEX Offering that helps projects best issue and launch their token.
                                You can stake BUSD to get a token share at the initial offering price. In the end, the project gets BUSD, you will get the tokens.
                            </p>
						</div>
                        <div class="h-inner-content">
							<h4 class="content-title">NFT Ecosystem</h4>
                            <p>
                            LambSwap will provide complete NFT underlying tools, including NFT casting, blind box, trading, mining, etc., and will also open up various gameplay methods such as “Attribute Refine” and “Breed”. The LambSwap ecosystem will gather NFT’s from different creators and categories. They are not only collections, but also bring you more fun and create a steady stream of value.
                            </p>
						</div>
                        <div class="h-inner-content">
							<h4 class="content-title">Lamb NFT Pool</h4>
                            <p>
                            3% of each transaction amount of $LST will enter the NFT POOL, and all users can stake NFT to obtain income from the NFT POOL. The moment you stake your NFT, your NFT will create a steady stream of income for you. The rarer the NFT, the higher the profit will be obtained!
                            </p>
						</div>
                        <div class="h-inner-content">
							<h4 class="content-title">Lamb NFT Market</h4>
                            <p>
                            Lamb will build a LambSwap Market that supports BEP20 Token transactions, NFT transactions, and NFT auctions, covering all asset types on the BSC chain, promoting the issuance of $LST Tokens, and providing strong driving force for the operation of the economic system of $ LST.
                            </p>
						</div>
                        <div class="h-inner-content">
							<h4 class="content-title">Lamb APP {NFT Gallery Metaverse}</h4>
                            <p>
                            As the most important entrance of LambSwap entertainment meta universe, LambSwap APP combines mini programs, NFC encryption, blockchain and other technologies, users can smoothly experience many functions in Lamb entertainment metaverse.
                            </p>
						</div>
                        <div class="h-inner-content">
							<h4 class="content-title">Lamb GamePad</h4>
                            <p>
                            We believe that games are one of the important application scenarios of NFT. LambSwap will complete the incubation and distribution of games through Lamb GamePad, and provide various solutions such as synthesis, casting, breed, attribute refine, etc. to empower NFT.
                            </p>
						</div>
                        <div class="h-inner-content">
							<h4 class="content-title">Lamb Online Casino</h4>
                            <p>
                            LambSwap Casino is an interesting online gambling venue known for its slot titles, bonuses, and crypto payments.
                            The game library at Lamb Online Casino is where the fun actually begins. Since RealTime Gaming powers the casino, players already know what to expect. Some of the most known slot games are ‘Slot.’ ‘Table Games.’ ‘Jackpots.’ ‘Live Casino.’ ‘Big Shot.’ ‘Popinata,’ ‘Frog Fortunes,’ and Fire Dragon.’
                            Lamb Online Casino only supports LST, Ethereum, BNB and Bitcoin at the moment, but if you’re a slots fan who loves to play on the go, this is definitely a casino worth checking out.
                            </p>
						</div>
                        <div class="h-inner-content">
							<h4 class="content-title">Lamb GameFi Metaverse</h4>
                            <p>
                            Join your friends in Lamb GameFi Metaverse: the brand new 5v5 MOBA showdown, and fight against real players! Choose your favorite heroes and build the perfect team with your comrades-in-arms! 10-second matchmaking, 10-minute battles. Laning, jungling, pushing, and teamfighting, all the fun of PC MOBA and action games in the palm of your hand! Feed your eSports spirit!
                            Lamb GameFi Metaverse, the fascinating MOBA game on mobile. Smash and outplay your enemies and achieve the final victory with your teammates!
                            </p>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Help Section End -->
@endsection()
