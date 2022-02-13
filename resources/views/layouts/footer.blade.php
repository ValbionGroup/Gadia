<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    tippy('.tooltip', {
      content: (reference) => reference.getAttribute('data-title'),
      onMount(instance) {
        instance.popperInstance.setOptions({
          placement: instance.reference.getAttribute('data-placement'),
        });
        instance.setProps({
          arrow: false,
        })
      }
    });
</script>
<script>
  const rightClickableArea = document.querySelector('body');

  const instance = tippy(rightClickableArea, {
    content: 'Gadia - Clique droit non autorisé',
    placement: 'right-start',
    trigger: 'manual',
    interactive: true,
    arrow: false,
    offset: [0, 0],
  });

  rightClickableArea.addEventListener('contextmenu', (event) => {
    event.preventDefault();

    instance.setProps({
      getReferenceClientRect: () => ({
        width: 0,
        height: 0,
        top: event.clientY,
        bottom: event.clientY,
        left: event.clientX,
        right: event.clientX,
      }),
    });

    instance.show();
  });
</script>
