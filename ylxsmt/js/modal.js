!function ($) {

    "use strict"; // jshint ;_;


    /* MODAL CLASS DEFINITION
  * ====================== */

    var Modal = function (element, options) {
        this.options = options
        this.$element = $(element) //�󶨹ر��¼����رհ�ťҪ����[data-dismiss="modal"]����
        .delegate('[data-dismiss="modal"]', 'click.dismiss.modal', $.proxy(this.hide, this))
        this.options.remote && this.$element.find('.modal-body').load(this.options.remote)
    }

    Modal.prototype = {

        constructor: Modal

        , 
        toggle: function () {
            return this[!this.isShown ? 'show' : 'hide']()
        }

        , 
        show: function () {
            var that = this
            , e = $.Event('show')
            //����show�¼�
            this.$element.trigger(e)

            if (this.isShown || e.isDefaultPrevented()) return

            this.isShown = true

            this.escape();//�󶨻��Ƴ������¼�

            this.backdrop(function () {
                var transition = $.support.transition && that.$element.hasClass('fade')

                if (!that.$element.parent().length) {
                    that.$element.appendTo(document.body) //don't move modals dom position
                }

                that.$element
                .show()

                if (transition) {
                    that.$element[0].offsetWidth // force reflow
                }

                that.$element
                .addClass('in')
                .attr('aria-hidden', false)

                that.enforceFocus()

                transition ?
                that.$element.one($.support.transition.end, function () {
                    that.$element.focus().trigger('shown')
                }) :
                that.$element.focus().trigger('shown')

            })
        }

        , 
        hide: function (e) {
            e && e.preventDefault()

            e = $.Event('hide')

            this.$element.trigger(e)

            if (!this.isShown || e.isDefaultPrevented()) return

            this.isShown = false

            this.escape()

            $(document).off('focusin.modal')

            this.$element
            .removeClass('in')
            .attr('aria-hidden', true)

            $.support.transition && this.$element.hasClass('fade') ?
            this.hideWithTransition() :
            this.hideModal()
        }

        , 
        //��ģ̬�Ի����ý���
        enforceFocus: function () {
            var that = this
            $(document).on('focusin.modal', function (e) {
                if (that.$element[0] !== e.target && !that.$element.has(e.target).length) {
                    that.$element.focus()
                }
            })
        }

        , 
        //���Ǹ�ʧ�ܵ����
        escape: function () {
            var that = this
            //����Ѿ�������ʾ״̬�����ҿ���ʹ�ü��̹رգ���ô�󶨼����¼�
            if (this.isShown && this.options.keyboard) {
                this.$element.on('keyup.dismiss.modal', function ( e ) {
                    e.which == 27 && that.hide()//�س��ر�
                })
            } else if (!this.isShown) {
                this.$element.off('keyup.dismiss.modal')//�Ƴ��¼�
            }
        }

        , 
        hideWithTransition: function () {
            var that = this
            //ǿ�ư��Ƴ��¼�
            , timeout = setTimeout(function () {
                that.$element.off($.support.transition.end)
                that.hideModal()
            }, 500)
            
            this.$element.one($.support.transition.end, function () {
                clearTimeout(timeout)
                that.hideModal()
            })
        }

        , 
        hideModal: function (that) {
            this.$element
            .hide()
            .trigger('hidden')
            //�������ػص�
            this.backdrop()//�Ƴ����ֲ�
        }

        , 
        removeBackdrop: function () {
            this.$backdrop.remove()
            this.$backdrop = null
        }

        , 
        backdrop: function (callback) {
            var that = this
            , animate = this.$element.hasClass('fade') ? 'fade' : ''

            if (this.isShown && this.options.backdrop) {
                var doAnimate = $.support.transition && animate
                //������ֲ�
                this.$backdrop = $('<div class="modal-backdrop ' + animate + '" />')
                .appendTo(document.body)

                this.$backdrop.click(
                    this.options.backdrop == 'static' ?
                    $.proxy(this.$element[0].focus, this.$element[0])
                    : $.proxy(this.hide, this)
                    )

                if (doAnimate) this.$backdrop[0].offsetWidth // force reflow
                //��ʾ���ֲ�
                this.$backdrop.addClass('in')

                doAnimate ?
                this.$backdrop.one($.support.transition.end, callback) :
                callback()

            } else if (!this.isShown && this.$backdrop) {
                this.$backdrop.removeClass('in')

                $.support.transition && this.$element.hasClass('fade')?
                this.$backdrop.one($.support.transition.end, $.proxy(this.removeBackdrop, this)) :
                this.removeBackdrop()

            } else if (callback) {
                callback()
            }
        }
    }


    /* MODAL PLUGIN DEFINITION
  * ======================= */

    var old = $.fn.modal

    $.fn.modal = function (option) {
        return this.each(function () {
            var $this = $(this)
            , data = $this.data('modal')
            , options = $.extend({}, $.fn.modal.defaults, $this.data(), typeof option == 'object' && option)
            if (!data) $this.data('modal', (data = new Modal(this, options)))
            if (typeof option == 'string') data[option]()//show hide toggle
            else if (options.show) data.show()//����ڲ���ָ��Ҫ��ʾ
        })
    }

    $.fn.modal.defaults = {
        backdrop: true, 
        keyboard: true, 
        show: true
    }

    $.fn.modal.Constructor = Modal


    /* MODAL NO CONFLICT
  * ================= */

    $.fn.modal.noConflict = function () {
        $.fn.modal = old
        return this
    }


    /* MODAL DATA-API
  * ============== */

    $(document).on('click.modal.data-api', '[data-toggle="modal"]', function (e) {
        var $this = $(this)
        , href = $this.attr('href')
        , $target = $($this.attr('data-target') || (href && href.replace(/.*(?=#[^\s]+$)/, ''))) //strip for ie7
        , option = $target.data('modal') ? 'toggle' : $.extend({
            remote:!/#/.test(href) && href
        }, $target.data(), $this.data())

        e.preventDefault()

        $target
        .modal(option)
        .one('hide', function () {
            $this.focus()
        })
    })

}(window.jQuery);