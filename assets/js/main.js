document.addEventListener('DOMContentLoaded',()=>{
  /* ── Lenis ── */
  const lenis=new Lenis({duration:1.15,easing:t=>Math.min(1,1.001-Math.pow(2,-10*t)),smoothWheel:true});
  gsap.registerPlugin(ScrollTrigger);
  lenis.on('scroll',ScrollTrigger.update);
  gsap.ticker.add(t=>lenis.raf(t*1000));
  gsap.ticker.lagSmoothing(0);

  /* ── Header scroll ── */
  const hdr=document.getElementById('site-header');
  if(hdr)window.addEventListener('scroll',()=>hdr.classList.toggle('scrolled',window.scrollY>10),{passive:true});

  /* ── Smooth anchors ── */
  document.querySelectorAll('a[href^="#"]').forEach(a=>{
    a.addEventListener('click',e=>{
      const t=document.querySelector(a.getAttribute('href'));
      if(t){e.preventDefault();lenis.scrollTo(t,{offset:-80,duration:1.3});}
    });
  });

  /* ── Mobile nav ── */
  const ham=document.querySelector('.hamburger');
  const mobileMenu=document.getElementById('mobile-menu');
  if(ham&&mobileMenu){
    ham.addEventListener('click',()=>{
      const open=mobileMenu.classList.toggle('open');
      ham.classList.toggle('open',open);
      ham.setAttribute('aria-expanded',open);
    });
    // Close when clicking outside
    document.addEventListener('click',e=>{
      if(!ham.contains(e.target)&&!mobileMenu.contains(e.target)){
        mobileMenu.classList.remove('open');
        ham.classList.remove('open');
        ham.setAttribute('aria-expanded','false');
      }
    },{passive:true});
  }

  /* ── Hero orb parallax ── */
  const o1=document.getElementById('hero-orb-1'),o2=document.getElementById('hero-orb-2');
  if(o1&&o2){
    document.addEventListener('mousemove',e=>{
      const x=(e.clientX/window.innerWidth-.5)*20,y=(e.clientY/window.innerHeight-.5)*20;
      gsap.to(o1,{x,y,duration:1.5,ease:'power2.out'});
      gsap.to(o2,{x:-x,y:-y,duration:1.5,ease:'power2.out'});
    },{passive:true});
  }

  /* ── Reveal helper ── */
  const reveal=(sel,opts={})=>{
    const els=document.querySelectorAll(sel);
    if(!els.length)return;
    gsap.from(els,{y:opts.y??45,x:opts.x??0,opacity:0,duration:opts.dur??0.8,ease:opts.ease??'power3.out',stagger:opts.stagger??0.1,scrollTrigger:{trigger:opts.trigger||els[0],start:opts.start??'top 87%',once:true}});
  };

  /* ── Section reveals ── */
  reveal('.sec-header');
  reveal('.feat-card',{stagger:.1,trigger:'#features .feat-grid'});
  reveal('.how-step',{stagger:.12,trigger:'#how .how-steps'});
  reveal('.svc-card',{stagger:.1});
  reveal('.value-card',{stagger:.1});
  reveal('#testimonial .tst-inner',{stagger:0});
  reveal('#cta-banner .cta-inner',{stagger:0});
  reveal('.page-hero-inner',{stagger:0});
  reveal('.contact-form',{x:30,y:0});

  /* ── Counters ── */
  document.querySelectorAll('.counter').forEach(el=>{
    const target=parseInt(el.dataset.target,10);
    const suffix=el.dataset.suffix||'';
    ScrollTrigger.create({trigger:el,start:'top 88%',once:true,onEnter(){
      let s=null;
      const dur=2000;
      (function step(ts){if(!s)s=ts;const p=Math.min((ts-s)/dur,1);el.textContent=Math.round(p*target)+suffix;if(p<1)requestAnimationFrame(step);})(performance.now());
    }});
  });

  /* ── Impact section ── */
  const impactBg=document.querySelector('.impact-bg-num');
  if(impactBg){
    gsap.to(impactBg,{opacity:.12,ease:'none',scrollTrigger:{trigger:'#impact',start:'top bottom',end:'bottom top',scrub:1}});
  }
});
